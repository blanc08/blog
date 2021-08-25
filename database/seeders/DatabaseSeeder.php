<?php

namespace Database\Seeders;

use App\Models\Contribution;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Contribution::factory(1)->create();

        User::create([
            'name' => "Bagus Oktaviadi",
            "email" => "bagusoktaviadi1@gmail.com",
            "password" => Hash::make('sk4YZdm8r2F$xbW'),
            "group" => "admin"
        ]);

       

    }
}
