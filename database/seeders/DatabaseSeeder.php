<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Database\Seeders\PostSeeder;
use Illuminate\Support\Facades\DB;
use Database\Seeders\CategorySeeder;
use Database\Seeders\ContributionSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => "Bagus Oktaviadi",
            "email" => "bagusoktaviadi1@gmail.com",
            'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
            "email_verified_at" => now(),
            'group' => 'admin', // group
            'remember_token' => Str::random(10),
        ]);
        
        User::factory(5)->create();
        Post::factory(20)->create();

        $this->call([
            ContributionSeeder::class,
            PostSeeder::class,
            CategorySeeder::class,
        ]);


    }
}
