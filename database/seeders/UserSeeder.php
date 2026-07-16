<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Admin;
use App\Models\Seller;
use App\Models\Customer;
use App\Models\SA;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         $admin = Admin::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');

        $seller = Seller::create([
            'name' => 'Seller User',
            'email' => 'seller@example.com',
            'password' => bcrypt('password'),
        ]);
        $seller->assignRole('seller');

        $customer = Customer::create([
            'name' => 'Customer User',
            'email' => 'customer@example.com',
            'password' => bcrypt('password'),
        ]);
        $customer->assignRole('customer');

        $sa = SA::create([
            'name' => 'SA User',
            'email' => 'sa@example.com',
            'password' => bcrypt('password'),
        ]);
        $sa->assignRole('sa');
    }
}
