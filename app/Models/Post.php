<?php

namespace App\Models;


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
}
