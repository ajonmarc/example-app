<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $guards = ['admin', 'seller', 'customer', 'sa'];

        $permissions = [
            'edit articles',
            'delete articles',
            'publish articles',
            'unpublish articles',
            'create users',
        ];

        // Create permissions for each guard
        foreach ($guards as $guard) {
            foreach ($permissions as $permission) {
                Permission::firstOrCreate([
                    'name' => $permission,
                    'guard_name' => $guard,
                ]);
            }
        }

        // Admin role
        $admin = Role::firstOrCreate([
            'name' => 'admin',
            'guard_name' => 'admin',
        ]);

        $admin->syncPermissions([
            'edit articles',
            'delete articles',
            'publish articles',
            'unpublish articles',
            'create users',
        ]);

        // Seller role
        $seller = Role::firstOrCreate([
            'name' => 'seller',
            'guard_name' => 'seller',
        ]);

        $seller->syncPermissions([
            'edit articles',
            'publish articles',
        ]);

        // Customer role
        $customer = Role::firstOrCreate([
            'name' => 'customer',
            'guard_name' => 'customer',
        ]);

        $customer->syncPermissions([
            'edit articles',
        ]);

        // SA role
        $sa = Role::firstOrCreate([
            'name' => 'sa',
            'guard_name' => 'sa',
        ]);

        $sa->syncPermissions([
            'edit articles',
            'delete articles',
            'publish articles',
            'unpublish articles',
            'create users',
        ]);
    }
}
