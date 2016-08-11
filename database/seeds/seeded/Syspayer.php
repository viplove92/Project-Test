<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Syspayers extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_payer')->insert([
            'name'           => 'Employer',
            'sorder'         => '2',
        ]);

        DB::table('sys_payer')->insert([
            'name'           => 'City Bank',
            'sorder'         => '3',
        ]);

        DB::table('sys_payer')->insert([
            'name'           => 'Government',
            'sorder'         => '0',
        ]);

        DB::table('sys_payer')->insert([
            'name'           => 'John Doe',
            'sorder'         => '0',
        ]);

        DB::table('sys_payer')->insert([
            'name'           => 'Jane Doe',
            'sorder'         => '0',
        ]);

        DB::table('sys_payer')->insert([
            'name'           => 'Client X',
            'sorder'         => '2',
        ]);

    }
}
