<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // insert data to table post
        DB::table('posts')->insert([
            ['title' => Str::random(50),'created_at' => now(),'updated_at' => now(),],
            ['title' => Str::random(50),'created_at' => now(),'updated_at' => now(),],
            ['title' => Str::random(50),'created_at' => now(),'updated_at' => now(),],
            ['title' => Str::random(50),'created_at' => now(),'updated_at' => now(),],
        ]);
    }
}
