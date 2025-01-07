<?php

namespace Database\Seeders;

use App\Models\Store;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stores = require database_path('data/Stores.php');

        $stores->each(function ($store) {
            Store::factory()->create([
                'manager_id' => $store['manager_id'],
                'store_code' => $store['store_code'],
                'name' => $store['name'],
                'location' => $store['location'],
                'contact_number' => $store['contact_number'],
                'contact_email' => $store['contact_email'],
                'opening_hours' => $store['opening_hours'],
                'latitude' => $store['latitude'],
                'longitude' => $store['longitude'],
            ]);
        });
    }
}
