<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role = Role::create(['name'=> 'isLecturer']);
    	$permission = Permission::create(['name'=> 'view lecturer']);
    	$permission = Permission::create(['name'=>'View Course']);

    	$role = Role::create(['name'=> 'isStudent']);
    	$permission = Permission::create(['name'=> 'View Student']);
    	$permission = Permission::create(['name'=> 'View Course']);

    	$role = Role::create(['name'=> 'isAdmin']);
    	$permission = Permission::create(['name'=> 'View lecturer']);
    	$permission = Permission::create(['name'=> 'View Student']);
    	$permission = Permission::create(['name' => 'View Course']);
    }
}
