<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('posts')->insert([
            "category_id" => 1,
            "title" => "Dummy Post Pertama",
            "slug" => "dummy-post-pertama",
            "excerpt" => "Post Pertama blog Succiduous 08",
            "thumbnail" => "thumbnail_post_pertama.jpg",
            "body" => "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate modi
            temporibus, ullam impedit quos quo? Nemo earum repellat pariatur quis, unde,
            illum quidem a id perferendis numquam aliquid accusamus corporis? Fugit
            molestiae illo facilis impedit nostrum saepe recusandae minus?. </p> <p> Quo tempora,
            fugit natus neque fugiat vel corporis repellat aperiam ipsam architecto
            quisquam. Aliquid ratione vero cumque commodi hic eaque sint suscipit dolorum
            velit. Consequatur deleniti facere odit dolorem optio. </p><p>Provident, illum, magnam
            inventore unde maiores doloremque non cumque error beatae voluptate quibusdam
            assumenda tempore minima ipsa ab recusandae sunt harum sint. Voluptatibus culpa
            adipisci soluta, odit repudiandae amet rerum unde!</p>
            ",
        ]);
    }
}
