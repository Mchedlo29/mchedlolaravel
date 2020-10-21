<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class CanPostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table("can_posts")->insert([
            "can_write"=>1,
        ]);
    }
}
