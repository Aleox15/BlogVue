<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Post::create([
            'title'=>'What is Html',
            'slug'=>Str::slug('Html slug'),
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos officia reprehenderit consequatur provident eaque, alias consequuntur corrupti, illum, ducimus voluptatibus dicta dolorem ipsa obcaecati cumque expedita maiores consectetur eius sed!',
            'image'=>'p1.jpg',
            'user_id'=>1,
            'category_id'=>1,
        ]);
         \App\Models\Post::create([
            'title'=>'what is javascription',
            'slug'=>Str::slug('Javascript slug'),
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos officia reprehenderit consequatur provident eaque, alias consequuntur corrupti, illum, ducimus voluptatibus dicta dolorem ipsa obcaecati cumque expedita maiores consectetur eius sed!',
            'image'=>'p2.jpg',
            'user_id'=>1,
            'category_id'=>2,
        ]);
         \App\Models\Post::create([
            'title'=>'what is html 5',
            'slug'=>Str::slug('Html5 slug'),
            'body'=>'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dignissimos officia reprehenderit consequatur provident eaque, alias consequuntur corrupti, illum, ducimus voluptatibus dicta dolorem ipsa obcaecati cumque expedita maiores consectetur eius sed!',
            'image'=>'p3.jpg',
            'user_id'=>1,
            'category_id'=>3,
        ]);
    }
}
