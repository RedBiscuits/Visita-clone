<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Privacy;
use App\Models\PrivacyTranslation;

class PrivacyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $privacy = Privacy::create();

        PrivacyTranslation::create([
            'privacy_id' => $privacy->id,
            'locale' => 'en',
            'title' => 'Privacy Policy',
            'content' => 'Privacy Policy',
        ]);

        PrivacyTranslation::create([
            'privacy_id' => $privacy->id,
            'locale' => 'ar',
            'title' => 'سياسة الخصوصية',
            'content' => 'سياسة الخصوصية',
        ]);
    }
}
