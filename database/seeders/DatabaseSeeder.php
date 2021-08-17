<?php

namespace Database\Seeders;

use App\Models\{User, Post, Category, Tag};

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(
            [CategorySeeder::class]
        );
        
        Tag::factory(10)->create();
        User::factory(1)->create();
        Post::factory(30)->create();
        
        $this->call(
            [PostTagSeeder::class]
        );
                
        
    }
}
