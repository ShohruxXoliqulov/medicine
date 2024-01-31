<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $role = Role::create(['name'=>'super-admin']);

        Permission::create(['name' => 'region-view']);
        Permission::create(['name' => 'region-create']);
        Permission::create(['name' => 'region-read']);
        Permission::create(['name' => 'region-update']);
        Permission::create(['name' => 'region-delete']);


        $role = Role::create(['name'=>'admin']);
        $adminPermissions = [
            Permission::create(['name' => 'apteka-view']),
            Permission::create(['name' => 'apteka-create']),
            Permission::create(['name' => 'apteka-read']),
            Permission::create(['name' => 'apteka-update']),
            Permission::create(['name' => 'apteka-delete']),
            Permission::create(['name' => 'doctor-view']),
            Permission::create(['name' => 'doctor-create']),
            Permission::create(['name' => 'doctor-read']),
            Permission::create(['name' => 'doctor-update']),
            Permission::create(['name' => 'doctor-delete']),
            Permission::create(['name' => 'employee-view']),
            Permission::create(['name' => 'employee-create']),
            Permission::create(['name' => 'employee-read']),
            Permission::create(['name' => 'employee-update']),
            Permission::create(['name' => 'employee-delete']),
            Permission::create(['name' => 'product-view']),
            Permission::create(['name' => 'product-create']),
            Permission::create(['name' => 'product-read']),
            Permission::create(['name' => 'product-update']),
            Permission::create(['name' => 'product-delete']),
            Permission::create(['name' => 'productType-view']),
            Permission::create(['name' => 'productType-create']),
            Permission::create(['name' => 'productType-read']),
            Permission::create(['name' => 'productType-update']),
            Permission::create(['name' => 'productType-delete']),
        ];
        $role->syncPermissions($adminPermissions);


        $role = Role::create(['name'=>'manager']);
        $managerPermissions = [
            Permission::create(['name' => 'meeting-view']),
            Permission::create(['name' => 'meeting-create']),
            Permission::create(['name' => 'meeting-read']),
            Permission::create(['name' => 'meeting-update']),
            Permission::create(['name' => 'meeting-delete']),
            Permission::create(['name' => 'warehouse-view']),
            Permission::create(['name' => 'warehouse-create']),
            Permission::create(['name' => 'warehouse-read']),
            Permission::create(['name' => 'warehouse-update']),
            Permission::create(['name' => 'warehouse-delete']),
        ];
        $role->syncPermissions($managerPermissions);
    }
}
