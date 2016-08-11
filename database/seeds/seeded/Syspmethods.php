<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syspmethods extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_pmethods')->insert([
            'name'            => 'Cash',
            'sorder'          => '1',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'Check',
            'sorder'          => '4',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'Credit Card',
            'sorder'          => '5',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'Debit',
            'sorder'          => '6',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'Electronic Transfer',
            'sorder'          => '7',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'Paypal',
            'sorder'          => '2',
        ]);

        DB::table('sys_pmethods')->insert([
            'name'            => 'ATM Withdrawals',
            'sorder'          => '3',
        ]);



    }
}
