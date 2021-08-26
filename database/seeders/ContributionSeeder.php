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
            "title" => "SKD - SCI Indonesia - Pekanbaru",
            "slug" => "skd-sci-indonesia-pekanbaru",
            "excerpt" => "Pembuatan Website Tryout simpel dengan mengunakan FrameWork Code Igniter",
            "image" => "skd_sci_indonesia.jpg",
            "body" => " - - - ",
            "link" => "https://skd.tryoutindonesia.com"
        ]);
    }
}
