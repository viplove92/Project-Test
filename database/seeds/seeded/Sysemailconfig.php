<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Sysemailconfig extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('sys_appconfig')->insert([
            'method'       => 'phpmail',
            'host'         => 'smtp.gmail.com',
            'username'     => 'you@gmail.com',
            'password'     => '123456',
            'apikey'       => '',
            'port'         => '587',
            'secure'       => 'tls',
        ]);
    }
}
