<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Setting::create([

        'name'    => 'Mother Care',
        'email'   => 'email@app.com',
        'phone'   => '01000000000',
        'address' => 'Egypt',
        'logo'    => 'logo.png',
        'favicon' => 'favicon.png',
       ]);
    }
}
