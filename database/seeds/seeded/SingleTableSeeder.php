<?php

use App\Models\Block;
use App\Models\Category;
use App\Models\City;
use App\Models\CityCode;
use App\Models\ComplaintArea;
use App\Models\ComplaintProblemType;
use App\Models\DocType;
use App\Models\Floor;
use App\Models\Gender;
use App\Models\Landline;
use App\Models\Mobile;
use App\Models\MobileRelate;
use App\Models\PaymentMode;
use App\Models\Pincode;
use App\Models\ServicingProblemType;
use App\Models\StaffType;
use App\Models\State;
use App\Models\Wing;
use Illuminate\Database\Seeder;

class SingleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();

        DB::statement("SET foreign_key_checks = 0");

        // genders table seeder
        Gender::truncate();
            Gender::create([
                'type' => 'Female'
            ]);
            Gender::create([
                'type' => 'Male'
            ]);
            Gender::create([
                'type' => 'Other'
            ]);

        // mobile_relates table seeder
        MobileRelate::truncate();
            MobileRelate::create([
                'number' => 'Profile'
            ]);
            MobileRelate::create([
                'number' => 'Vendor'
            ]);
            MobileRelate::create([
                'number' => 'Staff'
            ]);


        // mobiles table seeder
        Mobile::truncate();
        foreach(range(1,20) as $index)
        {
            Mobile::create([
                'number' => $faker->phoneNumber
            ]);
        }

        // city_codes table seeder
        CityCode::truncate();
        foreach(range(1,10) as $index)
        {
            CityCode::create([
                'code' => $faker->numberBetween(2,5000)
            ]);
        }

        // landline table seeder
        Landline::truncate();
        foreach(range(1,10) as $index)
        {
            $tem = CityCode::first();
            Landline::create([
                'code_id' => $tem,
                'number' => $faker->phoneNumber

            ]);
        }


        // Cities table seeder
        City::truncate();
        foreach(range(1,10) as $index)
        {
            City::create([
                'name' => $faker->city
            ]);
        }

        // States table seeder
        State::truncate();
        foreach(range(1,5) as $index)
        {
            State::create([
                'name' => $faker->city
            ]);
        }

        // pincodes table seeder
        Pincode::truncate();
        foreach(range(1,10) as $index)
        {
            Pincode::create([
                'pin' => $faker->postcode
            ]);
        }

        // wings table seeder
        Wing::truncate();
        foreach(range(1,10) as $index)
        {
            Wing::create([
                'name' => $faker->numberBetween(1,20)
            ]);
        }

        // blocks table seeder
        Block::truncate();
        foreach(range(1,50) as $index)
        {
            Block::create([
                'name' => $faker->numberBetween(100,3000)
            ]);
        }

        // floor table seeder
        Floor::truncate();
        foreach(range(1,50) as $index)
        {
            Floor::create([
                'name' => $faker->numberBetween(1,200)
            ]);
        }

        // categories table seeder
        Category::truncate();
        Category::create([
            'name' => 'Mobile'
        ]);
        Category::create([
            'name' => 'Television'
        ]);
        Category::create([
            'name' => 'Computer'
        ]);
        Category::create([
            'name' => 'Tablets'
        ]);
        Category::create([
            'name' => 'Bike'
        ]);
        Category::create([
            'name' => 'Car'
        ]);
        Category::create([
            'name' => 'Scooter / Moped'
        ]);


        // complaint_areas table seeder
        ComplaintArea::truncate();
            ComplaintArea::create([
                'name' => 'Parking'
            ]);
            ComplaintArea::create([
                'name' => 'Gallery'
            ]);
            ComplaintArea::create([
                'name' => 'Main Gate'
            ]);
            ComplaintArea::create([
                'name' => 'Corridor'
            ]);
            ComplaintArea::create([
                'name' => 'Stairs'
            ]);
            ComplaintArea::create([
                'name' => 'Terrace'
            ]);
            ComplaintArea::create([
                'name' => 'Building Outer'
            ]);



        // problem_types table seeder
        ComplaintProblemType::truncate();
            ComplaintProblemType::create([
                'type' => 'Water Leakage'
            ]);
            ComplaintProblemType::create([
                'type' => 'Scrap Material Laying'
            ]);
            ComplaintProblemType::create([
                'type' => 'Garbage on Front'
            ]);
            ComplaintProblemType::create([
                'type' => 'Stairs Dirty'
            ]);
            ComplaintProblemType::create([
                'type' => 'Bathroom Dirty'
            ]);
            ComplaintProblemType::create([
                'type' => 'Security Breach'
            ]);
            ComplaintProblemType::create([
                'type' => 'Vehicle Parked on Wrong Place'
            ]);

        // staff_types table seeder
        StaffType::truncate();
            StaffType::create([
                'type' => 'Security Guard'
            ]);
            StaffType::create([
                'type' => 'Sweeper'
            ]);
            StaffType::create([
                'type' => 'Electrician'
            ]);
            StaffType::create([
                'type' => 'Plumber'
            ]);
            StaffType::create([
                'type' => 'Home Delivery'
            ]);
            StaffType::create([
                'type' => 'Vehicle Serviceman'
            ]);

        // doc_types table seeder
        DocType::truncate();
            DocType::create([
                'type' => 'Aadhar Card'
            ]);
            DocType::create([
                'type' => 'Election Card'
            ]);
            DocType::create([
                'type' => 'Electric Bill'
            ]);
            DocType::create([
                'type' => 'Water Bill'
            ]);
            DocType::create([
                'type' => 'Tax Receipt'
            ]);
            DocType::create([
                'type' => 'Passport'
            ]);
            DocType::create([
                'type' => 'PAN Card'
            ]);
            DocType::create([
                'type' => 'Driving License'
            ]);

        // servicing_problem_types table seeder
        ServicingProblemType::truncate();
            ServicingProblemType::create([
                'type' => 'Regular Maintenance'
            ]);
            ServicingProblemType::create([
                'type' => 'Not Functioning as Intended'
            ]);
            ServicingProblemType::create([
                'type' => 'Dead'
            ]);
            ServicingProblemType::create([
                'type' => 'Scheduled Spare Replacement'
            ]);


        // payment_modes table seeder
        PaymentMode::truncate();
            PaymentMode::create([
                'type' => 'Cash'
            ]);
            PaymentMode::create([
                'type' => 'Cheque'
            ]);
            PaymentMode::create([
                'type' => 'NEFT / RTGS'
            ]);
            PaymentMode::create([
                'type' => 'Easycash'
            ]);
            PaymentMode::create([
                'type' => 'IMPS'
            ]);
            PaymentMode::create([
                'type' => 'Online'
            ]);

        DB::statement("SET foreign_key_checks=1");

    }
}
