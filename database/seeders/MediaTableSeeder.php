<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use DB;

class MediaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            ['title' => 'Kingdom', 
            'category' => 'TV Show', 
            'genre' => 'Epic action', 
            'grade' => '9'],
            ['title' => 'Breaking Bad', 
            'category' => 'TV Show', 
            'genre' => 'Drama', 
            'grade' => '10'],
        ]);
    }
}
