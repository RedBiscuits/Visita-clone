<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Admin;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         Admin::create([
            'name' => 'Admin',
            'email' => 'w@app.com',
            'password' => bcrypt('123456789'),
            'is_admin' => 1,
        ]);
    }
}
