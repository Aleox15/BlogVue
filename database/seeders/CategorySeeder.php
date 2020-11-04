<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Category::create([
            'name'=>'html tutorials',
            'slug'=>'html-tutorials',
        ]);
        \App\Models\Category::create([
            'name'=>'js tutorials',
            'slug'=>'js-tutorials',
        ]);
        \App\Models\Category::create([
            'name'=>'laravel tutorials',
            'slug'=>'laravel-tutorials',
        ]);
        \App\Models\Category::create([
            'name'=>'vue js tutorials',
            'slug'=>'vue-js-tutorials',
        ]);
    }
}
