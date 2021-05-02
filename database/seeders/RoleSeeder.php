<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * se crea los 4 roles con sus nombres
     *
     * se crea los permisos a las rutas de las vistas y asu vez asignándole el rol a cada permiso
     *
     */
    public function run()
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Cliente']);
        $role3 = Role::create(['name' => 'Vetarinaria']);
        $role4 = Role::create(['name' => 'Medico']);

        Permission::create(['name' => 'dashboard'])->syncRoles([$role1, $role2, $role3, $role4]);

        Permission::create(['name' => 'user-list'])->assignRole($role1);
        Permission::create(['name' => 'user-create'])->assignRole($role1);
        Permission::create(['name' => 'user-update'])->assignRole($role1);
        Permission::create(['name' => 'user-save'])->assignRole($role1);
        Permission::create(['name' => 'user-delete'])->assignRole($role1);

        Permission::create(['name' => 'pet-list'])->assignRole([$role4,$role1]);
        Permission::create(['name' => 'pet-create'])->assignRole([$role4,$role1]);
        Permission::create(['name' => 'pet-update'])->assignRole([$role4,$role1]);
        Permission::create(['name' => 'pet-save'])->assignRole([$role4,$role1]);
        Permission::create(['name' => 'pet-delete'])->assignRole([$role4,$role1]);

    }
}
