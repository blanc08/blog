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



       

    }
}
