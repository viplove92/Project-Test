<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syspl extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_pl')->insert([
            'c'                 => 'flmcs',
            'status'            => '0',
            'sorder'            => '0',
        ]);

        DB::table('sys_pl')->insert([
            'c'                 => 'notes',
            'status'            => '0',
            'sorder'            => '0',
        ]);


    }
}
