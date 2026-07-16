<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // Create permissions
        $permissions = [
            'edit articles',
            'delete articles',
            'publish articles',
            'unpublish articles',
            'create users',
        ];

        foreach ($permissions as $permission) {
            Permission::firstOrCreate([
                'name' => $permission,
                'guard_name' => 'web',
            ]);
        }

        // Super Admin
        $sa = Role::firstOrCreate([
            'name' => 'sa',
            'guard_name' => 'web',
        ]);

        $sa->syncPermissions($permissions);

        // Admin
        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'web',
        ]);

        $admin->syncPermissions([
            'edit articles',
            'delete articles',
            'publish articles',
            'unpublish articles',
            'create users',
        ]);

        // Seller
        $seller = Role::firstOrCreate([
            'name' => 'seller',
            'guard_name' => 'web',
        ]);

        $seller->syncPermissions([
            'edit articles',
            'publish articles',
        ]);

        // Customer
        $customer = Role::firstOrCreate([
            'name' => 'customer',
            'guard_name' => 'web',
        ]);

        $customer->syncPermissions([
            'edit articles',
        ]);
    }
}