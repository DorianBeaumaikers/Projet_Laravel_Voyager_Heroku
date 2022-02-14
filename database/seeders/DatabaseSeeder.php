<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Post;
use App\Models\Client;
use App\Models\Tag;
use App\Models\Work;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()->count(5)->hasPosts(3)->create();

        Client::factory()->count(5)->has(Work::factory()->count(3)->hasTags(2))->create();
    }
}
