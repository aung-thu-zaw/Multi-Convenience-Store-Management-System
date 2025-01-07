<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin Account
        User::factory()->create([
            'name' => 'Super Admin',
            'email' => 'superadmin@store.com',
            'status' => 'active',
        ]);

        // Store Manager Account
        User::factory()->create([
            'name' => 'Store Manager',
            'email' => 'storemanager@store.com',
            'status' => 'active',
        ]);

        // Cashier Account
        User::factory()->create([
            'name' => 'Cashier',
            'email' => 'cashier@store.com',
            'status' => 'active',
        ]);

        // Inventory Manager Account
        User::factory()->create([
            'name' => 'Inventory Manager',
            'email' => 'inventorymanager@store.com',
            'status' => 'active',
        ]);

        // Accountant Account
        User::factory()->create([
            'name' => 'Accountant',
            'email' => 'accountant@store.com',
            'status' => 'active',
        ]);

        User::factory(50)->create();
    }
}
