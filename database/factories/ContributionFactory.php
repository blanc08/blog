<?php

namespace Database\Factories;

use App\Models\Contribution;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContributionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Contribution::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "title" => "SKD - SCI Indonesia - Pekanbaru",
            "slug" => "skd-sci-indonesia-pekanbaru",
            "excerpt" => "Pembuatan Website Tryout simpel dengan mengunakan FrameWork Code Igniter",
            "image" => "skd_sci_indonesia.jpg",
            "body" => " - - - ",
            "link" => "https://skd.tryoutindonesia.com"
        ];
    }
}
