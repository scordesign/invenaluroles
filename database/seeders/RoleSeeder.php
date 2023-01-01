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

        Permission::create (['name' => 'bodega.index'])->syncRoles([$role1]);
        Permission::create (['name' => 'bodega.edit'])->syncRoles([$role1]);
        Permission::create (['name' => 'bodega.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'bodega.create'])->syncRoles([$role1]);

        Permission::create (['name' => 'codigo.index'])->syncRoles([$role1]);
        Permission::create (['name' => 'codigo.edit'])->syncRoles([$role1]);
        Permission::create (['name' => 'codigo.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'codigo.create'])->syncRoles([$role1]);

        Permission::create (['name' => 'grupo.index'])->syncRoles([$role1]);
        Permission::create (['name' => 'grupo.edit'])->syncRoles([$role1]);
        Permission::create (['name' => 'grupo.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'grupo.create'])->syncRoles([$role1]);

        Permission::create (['name' => 'ubicacione.index'])->syncRoles([$role1]);
        Permission::create (['name' => 'ubicacione.edit'])->syncRoles([$role1]);
        Permission::create (['name' => 'ubicacione.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'ubicacione.create'])->syncRoles([$role1]);

        Permission::create (['name' => 'unidade.index'])->syncRoles([$role1]);
        Permission::create (['name' => 'unidade.edit'])->syncRoles([$role1]);
        Permission::create (['name' => 'unidade.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'unidade.create'])->syncRoles([$role1]);

        Permission::create (['name' => 'producto.index'])->syncRoles([$role1,$role2]);
        Permission::create (['name' => 'producto.edit'])->syncRoles([$role1,$role2]);
        Permission::create (['name' => 'producto.delete'])->syncRoles([$role1]);
        Permission::create (['name' => 'producto.create'])->syncRoles([$role1,$role2]);
 
     }
}
