<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sysschedule extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_schedule')->insert([
            'cname'          => 'accounting_snapshot',
            'val'            => 'Active',
        ]);

        DB::table('sys_schedule')->insert([
            'cname'          => 'recurring_invoice',
            'val'            => 'Active',
        ]);

        DB::table('sys_schedule')->insert([
            'cname'          => 'notify',
            'val'            => 'Active',
        ]);

        DB::table('sys_schedule')->insert([
            'cname'          => 'notifyemail',
            'val'            => 'demo@example.com',
        ]);

    }
}
