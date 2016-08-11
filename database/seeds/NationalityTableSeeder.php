<?php

use App\Models\Nationality;
use Illuminate\Database\Seeder;

class NationalityTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

//        DB::table('nationalities')->truncate();

        Nationality::create([
            'nationality'      => 'Pakistani'
        ]);

        Nationality::create([
            'nationality'      => 'Bangladeshi'
        ]);

        Nationality::create([
            'nationality'      => 'Nepali'
        ]);

        Nationality::create([
            'nationality'      => 'Indian'
        ]);

        Nationality::create([
            'nationality'      => 'Sri Lankan'
        ]);

        Nationality::create([
            'nationality'      => 'Tibetan'
        ]);

        Nationality::create([
            'nationality'      => 'Chinese'
        ]);

        Nationality::create([
            'nationality'      => 'American'
        ]);

        Nationality::create([
            'nationality'      => 'Jamaican'
        ]);

        Nationality::create([
            'nationality'      => 'African'
        ]);

        Nationality::create([
            'nationality'      => 'American'
        ]);

        Nationality::create([
            'nationality'      => 'British'
        ]);

         Nationality::create([
            'nationality'      => 'Afghanistan'
        ]);

    }
}
