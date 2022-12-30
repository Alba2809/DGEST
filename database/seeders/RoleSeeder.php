<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        $roleAdmin = Role::create(['name' => 'Admin']);
        $roleJefe = Role::create(['name' => 'Jefe']);
        $roleEgresado = Role::create(['name' => 'Egresado']);
        $roleEmpresa = Role::create(['name' => 'Empresa']);

        Permission::create(['name' => 'login'])->syncRoles([$roleAdmin,$roleJefe,$roleEgresado,$roleEmpresa]);
        Permission::create(['name' => 'admin.usuarios'])->assignRole($roleAdmin);
        
        Permission::create(['name' => 'egresado.form'])->assignRole($roleEgresado);
        
        Permission::create(['name' => 'empresa.form'])->assignRole($roleEmpresa);
        
        Permission::create(['name' => 'jefe.correo'])->assignRole($roleJefe);
        Permission::create(['name' => 'jefe.muestra'])->assignRole($roleJefe);
    }
}
