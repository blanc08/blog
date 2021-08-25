<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class ContributionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contributions')->insert([
            'title' => Str::random(10),
            'slug' => Str::random(100),
            'image' => Str::random(100),
            'exceprt' => Str::random(100),
            'body' => Str::random(100),
            'link' => Str::random(100),
        ]);
    }
}
