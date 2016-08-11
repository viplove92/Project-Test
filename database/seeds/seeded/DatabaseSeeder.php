<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

//         $this->call('RoleSeeder');
//         $this->call('UserSeeder');
//         $this->call('SingleTableSeeder');
//         $this->call('GendersTableSeeder');
//         $this->call('LanguagesTableSeeder');
//         $this->call('NationalityTableSeeder');
//         $this->call('StaffRolesTableSeeder');
         $this->call('Sysappconfig');
         $this->call('Syscats');
         $this->call('Sysemailconfig');
         $this->call('Sysemailtemplates');
         $this->call('Syspayee');
         $this->call('Syspayer');
         $this->call('Syspg');
         $this->call('Syspl');
         $this->call('Sysmethods');
         $this->call('Sysschedule');
         $this->call('Sysschedulelogs');

        Model::reguard();
    }
}
