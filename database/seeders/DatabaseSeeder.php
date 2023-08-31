<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();

        // Category::factory(5)->create();

        Tag::factory(8)->create();

        Category::factory()
        ->has(Post::factory()->count(4))
        ->count(10)
        ->create();

        

        /* Post::factory(5)->create([
            'category_id' => rand(1, 5)
        ]); */

        foreach(Post::all() as $post){ // loop through all posts 
            $random_tags = Tag::all()->random(rand(2, 5))->pluck('id')->toArray();
            // Insert random post tag
            foreach ($random_tags as $tag) {
                DB::table('post_tag')->insert([
                    'post_id' => $post->id,
                    'tag_id' => Tag::all()->random(1)[0]->id
                ]);
            }
        }

    }
}