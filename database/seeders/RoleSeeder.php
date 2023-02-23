<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = Role::create(['name' => 'Superadmin']);
        $role = Role::create(['name' => 'admin']);
        $role = Role::create(['name' => 'supervisor']);
        $role = Role::create(['name' => 'user']);
        
    }
}
