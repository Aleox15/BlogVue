<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Setting::create([
            'site_name'=>'ayoub site',
            'contact_email'=>'ayoub@gmail.com',
            'adress'=>'adress example here',
        ]);
    }
}
