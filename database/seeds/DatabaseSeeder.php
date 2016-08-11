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

        $this->call('UserSeeder');
        $this->call('RoleSeeder');
        $this->call('LanguagesTableSeeder');
        $this->call('NationalityTableSeeder');
        $this->call('StaffRolesTableSeeder');
        $this->call('Syscats');
        $this->call('Syspmethods');

        Model::reguard();
    }
}
