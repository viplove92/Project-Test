<?php use App\Models\State;

use Illuminate\Database\Seeder;

class StateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('states')->truncate();

        State::create([
            'state_name'   => 'Andaman and Nicobar',
        ]);

        State::create([
            'state_name'   => 'Arunachal Pradesh'
        ]);

        State::create([
            'state_name'   => 'Assam',
        ]);

        State::create([
            'state_name'   => 'Bihar',
        ]);

        State::create([
            'state_name'   => 'Chandigarh',
        ]);

        State::create([
            'state_name'   => 'Chhattisgarh',
        ]);

        State::create([
            'state_name'   => 'Dadra and Nagar Haveli',
        ]);

        State::create([
            'state_name'   => 'Daman and Diu',
        ]);

        State::create([
            'state_name'   => 'Delhi',
        ]);

        State::create([
            'state_name'   => 'Goa',
        ]);

        State::create([
            'state_name'   => 'Gujarat',
        ]);

        State::create([
            'state_name'   => 'Haryana',
        ]);

        State::create([
            'state_name'   => 'Himachal Pradesh',
        ]);

        State::create([
            'state_name'   => 'Jammu and Kashmir',
        ]);

        State::create([
            'state_name'   => 'Jharkhand',
        ]);

        State::create([
            'state_name'   => 'Karnataka',
        ]);

        State::create([
            'state_name'   => 'Kerala',
        ]);

        State::create([
            'state_name'   => 'Lakshadweep',
        ]);

        State::create([
            'state_name'   => 'Madhya Pradesh',
        ]);

        State::create([
            'state_name'   => 'Maharashtra',
        ]);

        State::create([
            'state_name'   => 'Manipur',
        ]);

        State::create([
            'state_name'   => 'Meghalaya',
        ]);

        State::create([
            'state_name'   => 'Mizoram',
        ]);

        State::create([
            'state_name'   => 'Nagaland',
        ]);

        State::create([
            'state_name'   => 'Odisha',
        ]);

        State::create([
            'state_name'   => 'Meghalaya',
        ]);

        State::create([
            'state_name'   => 'Puducherry',
        ]);

        State::create([
            'state_name'   => 'Punjab',
        ]);

        State::create([
            'state_name'   => 'Rajasthan',
        ]);

        State::create([
            'state_name'   => 'Sikkim',
        ]);

        State::create([
            'state_name'   => 'Tamil Nadu',
        ]);

        State::create([
            'state_name'   => 'Telangana',
        ]);

        State::create([
            'state_name'   => 'Tripura',
        ]);

        State::create([
            'state_name'   => 'Uttar Pradesh',
        ]);

        State::create([
            'state_name'   => 'Uttarakhand',
        ]);

        State::create([
            'state_name'   => 'West Bengal',
        ]);


    }
}
