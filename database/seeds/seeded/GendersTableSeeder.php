<?php

use App\Models\Gender;
use Illuminate\Database\Seeder;

class GendersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genders')->truncate();

        Gender::create([
            'gender'      => 'Male'
        ]);

       Gender::create([
            'gender'      => 'Female'
        ]);

        Gender::create([
            'gender'      => 'Other'
        ]);
    }
}
