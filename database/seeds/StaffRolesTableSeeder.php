<?php

use App\Models\Role;
use App\Models\StaffRole;
use Illuminate\Database\Seeder;

class StaffRolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//            DB::table('staff_roles')->truncate();

            StaffRole::create([
            'role_name'             => 'Cleaner'
            ]);

            StaffRole::create([
            'role_name'      => 'Driver'
            ]);

            StaffRole::create([
            'role_name'      => 'Security Guard'
            ]);

            StaffRole::create([
            'role_name'      => 'Laundry'
            ]);

            StaffRole::create([
            'role_name'      => 'Hawker'
            ]);

    }
}
