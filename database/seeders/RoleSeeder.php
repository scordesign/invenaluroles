<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

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
        $role1 = Role::create(['name' => 'admin']);
        $role2 = Role::create(['name' => 'digitador']);

        Permission::create (['name'] => 'bodegas')
        Permission::create (['name'] => 'grupos')
        Permission::create (['name'] => 'ubicaciones')
        Permission::create (['name'] => 'bodegas')

    }
}
