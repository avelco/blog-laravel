<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['name' => 'Travel'],
            ['name' => 'Programming'],
            ['name' => 'Inmigration'],
            ['name' => 'Video Games'],
        ]);
    }
}
