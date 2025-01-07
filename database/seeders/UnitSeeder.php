<?php

namespace Database\Seeders;

use App\Models\Unit;
use Illuminate\Database\Seeder;

class UnitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $units = require database_path('data/Units.php');

        $units->each(fn ($unit) => Unit::create($unit));
    }
}
