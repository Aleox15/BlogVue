<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::create([
            'name'=>'Ayoub',
            'email'=>'ayoub@gmail.com',
            'password'=>bcrypt('12345678'),
            'profile_img'=>'profile_img1.jpg',

        ]);
    }
}
