<?php

use Illuminate\Database\Seeder;
use App\Models\Role;
use App\Models\User;

class UserSeeder extends Seeder{

    public function run(){
        DB::table('users')->delete();
//        DB::statement("SET foreign_key_checks = 0");
//        User::truncate();

        $adminRole = Role::whereName('administrator')->first();
        $userRole = Role::whereName('user')->first();

        $user = User::create(array(
            'first_name'    => 'Suchay',
            'last_name'     => 'Janbandhu',
            'email'         => 'suchayj@easymanage.dev',
            'password'      => Hash::make('password'),
            'confirmed'     => 1
        ));
        $user->assignRole($adminRole);

        $user = User::create(array(
            'first_name'    => 'Piyush',
            'last_name'     => 'Raut',
            'email'         => 'piyush@easymanage.dev',
            'password'      => Hash::make('password'),
            'confirmed'     => 1
        ));
        $user->assignRole($userRole);
    }
}