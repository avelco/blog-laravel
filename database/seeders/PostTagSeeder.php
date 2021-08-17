<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Seeder;

class PostTagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for( $i = 1; $i <= 30; $i++ )
        {
            DB::table('post_tag')->insert([
            "tag_id" => rand(1, 4),
            "post_id" => $i
            ]);
        }
    }
}
