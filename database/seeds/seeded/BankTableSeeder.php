<?php

use App\Models\Bank;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class BankTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banks')->truncate();

//        $userJson = File::get(storage_path() . "/jsondata/bank.json");
//        $user = json_decode($userJson);
//        foreach ($user as $object) {
//            Bank::create(array(
//                'bank' => $object->bank,
//                'ifsc' => $object->ifsc,
//                'micrcode' => $object->micrcode,
//                'branch' => $object->branch,
//                'address' => $object->address,
//                'contact' => $object->contact,
//                'city' => $object->city,
//                'district' => $object->district,
//                'state' => $object->state,
//            ));
//        }
    }
}
