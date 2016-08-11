<?php

use App\Models\Language;
use Illuminate\Database\Seeder;

class LanguagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('languages')->truncate();

        Language::create([
            'language_name'      => 'Marathi'
        ]);

        Language::create([
            'language_name'      => 'Hindi'
        ]);

        Language::create([
            'language_name'      => 'Bengali'
        ]);

        Language::create([
            'language_name'      => 'Tamil'
        ]);

        Language::create([
            'language_name'      => 'Telugu'
        ]);

        Language::create([
            'language_name'      => 'Malyalam'
        ]);

        Language::create([
            'language_name'      => 'Bhojpuri'
        ]);

        Language::create([
            'language_name'      => 'Maithili'
        ]);

        Language::create([
            'language_name'      => 'Punjabi'
        ]);

        Language::create([
            'language_name'      => 'Haryani'
        ]);

        Language::create([
            'language_name'      => 'Gujrati'
        ]);

        Language::create([
            'language_name'      => 'Odiya'
        ]);

        Language::create([
            'language_name'      => 'Tulu'
        ]);

    }
}
