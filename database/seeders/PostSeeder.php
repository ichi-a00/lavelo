<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factoryのときはイベント走らせないように
        \Event::fakeFor(function () {
            Post::factory()->count(50)->create();
        });
    }
}