<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        for ($i=0; $i < 50; $i++) {
            DB::table("posts")->insert([
                "title"=>Str::random(32),                "description"=>Str::random(64),
            ]);
        }        

    }
}
