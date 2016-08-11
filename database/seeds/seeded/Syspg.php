<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syspg extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_pg')->insert([
            'name'              => 'Paypal',
            'settings'          => 'Paypal Email',
            'value'             => 'demo@example.com',
            'processor'         => 'paypal',
            'ins'               => 'Invoices',
            'c1'                => 'INR',
            'c2'                => '1',
            'c3'                => '',
            'c4'                => '',
            'c5'                => '',
            'status'            => 'Active',
            'sorder'            => '1',
        ]);

        DB::table('sys_pg')->insert([
            'name'              => 'Bank / Cash',
            'settings'          => 'Instructions',
            'value'             => 'Make a Payment to Our Bank Account <br>Bank Name: Oriental Bank of Commerce <br>Account Name: Techkaps <br>Account Number: 1505XXXXXXXX <br>',
            'processor'         => 'manualpayment',
            'ins'               => 'Invoices',
            'c1'                => 'INR',
            'c2'                => '',
            'c3'                => '',
            'c4'                => '',
            'c5'                => '',
            'status'            => 'Active',
            'sorder'            => '3',
        ]);

        DB::table('sys_pg')->insert([
            'name'              => 'CCAvenue',
            'settings'          => 'Merchant ID',
            'value'             => 'your merchant id',
            'processor'         => 'ccavenue',
            'ins'               => '',
            'c1'                => 'insert working key here',
            'c2'                => 'INR',
            'c3'                => '1',
            'c4'                => '',
            'c5'                => '',
            'status'            => 'Inactive',
            'sorder'            => '3',
        ]);

        DB::table('sys_pg')->insert([
            'name'              => 'Payumoney',
            'settings'          => 'Payumoney Email',
            'value'             => 'demo@example.com',
            'processor'         => 'payumoney',
            'ins'               => 'Invoices',
            'c1'                => 'INR',
            'c2'                => '1',
            'c3'                => '',
            'c4'                => '',
            'c5'                => '',
            'status'            => 'Active',
            'sorder'            => '1',
        ]);

    }
}
