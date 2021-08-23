<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory;
    
    protected $dates = ['published_at'];
    
    public function category($value="")
    {
        return $this->belongsTo(Category::class);
    }
    
    public function tags($value="")
    {
        return $this->belongsToMany(Tag::class);
    }
    
    public function getRouteKeyName()
    {
        return 'url';
    }
    
    public function scopePublished($query)
    {
        $query->whereNotNull('published_at')
                        ->where('published_at', '<=', Carbon::now())
                        ->with(['category', 'tags'])
                        ->latest('published_at')
                        ->take(8);
    }    
    
    public function scopePublishedByCategory($query, $category)
    {
        $query->whereNotNull('published_at')
                        ->where('category_id', $category->id)
                        ->where('published_at', '<=', Carbon::now())
                        ->with(['category', 'tags'])
                        ->latest('published_at');
    }
}
