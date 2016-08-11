<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syspayee extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_payee')->insert([
            'name'          => 'Amazon',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'eBay',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'Google',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'Employee',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'Gas Station',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'Government',
            'sorder'        => '0',
        ]);

        DB::table('sys_payee')->insert([
            'name'          => 'Other',
            'sorder'        => '0',
        ]);


    }
}
