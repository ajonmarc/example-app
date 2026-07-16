<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sa = User::create([
            'name' => 'Super Admin',
            'email' => 'sa@example.com',
            'password' => 'password',
        ]);

        $sa->assignRole('sa');

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => 'password',
        ]);

        $admin->assignRole('admin');

        $seller = User::create([
            'name' => 'Seller',
            'email' => 'seller@example.com',
            'password' => 'password',
        ]);

        $seller->assignRole('seller');

        $customer = User::create([
            'name' => 'Customer',
            'email' => 'customer@example.com',
            'password' => 'password',
        ]);

        $customer->assignRole('customer');
    }
}
