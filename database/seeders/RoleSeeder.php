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
     */
    public function run(): void
    {
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Estilista']);
        $role3 = Role::create(['name' => 'User']);


        Permission::create(['name' => 'admin.home',
                            'description'=> 'Ver el dashboard'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver listado de usuarios'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.users.create',
                            'description' => 'Crear usuarios'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.destroy',
                            'description' => 'Eliminar usuarios'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.roles.index',
                            'description' => 'Ver listado de Roles'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.roles.create',
                            'description' => 'Crear Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.edit',
                            'description' => 'Editar Roles'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.roles.destroy',
                            'description' => 'Eliminar Roless'])->syncRoles([$role1]);


        Permission::create(['name' => 'admin.products.index',
                            'description' => 'Ver listado de productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.create',
                            'description' => 'Agregar productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.edit',
                            'description' => 'Editar productos'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.products.destroy',
                            'description' => 'Eliminar productos'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.tips.index',
                            'description' => 'Ver listado de tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tips.create',
                            'description' => 'Agregar tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tips.edit',
                            'description' => 'Editar tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tips.destroy',
                            'description' => 'Eliminar tips'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.services.index',
                            'description' => 'Ver listado de tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.services.create',
                            'description' => 'Agregar tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.services.edit',
                            'description' => 'Editar tips'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.services.destroy',
                            'description' => 'Eliminar tips'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.categories.index',
                            'description' => 'Ver listado de categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'Agregar categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Editar categorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Eliminar categorías'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.subcategories.index',
                            'description' => 'Ver listado de subcategorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.subcategories.create',
                            'description' => 'Agregar subcategorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.subcategories.edit',
                            'description' => 'Editar subcategorías'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.subcategories.destroy',
                            'description' => 'Eliminar subcategorías'])->syncRoles([$role1, $role2]);


        Permission::create(['name' => 'admin.departments.index',
                            'description' => 'Ver listado de departments'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.departments.create',
                            'description' => 'Agregar departments'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.departments.edit',
                            'description' => 'Editar departments'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.departments.destroy',
                            'description' => 'Eliminar departments'])->syncRoles([$role1]);

                            
        Permission::create(['name' => 'admin.cities.index',
                            'description' => 'Ver listado de Ciudades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.cities.create',
                            'description' => 'Agregar Ciudades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.cities.edit',
                            'description' => 'Editar Ciudades'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.cities.destroy',
                            'description' => 'Eliminar Ciudades'])->syncRoles([$role1]);
    }
}
