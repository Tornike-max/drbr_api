<?php

namespace Database\Seeders;

use App\Models\Agent;
use App\Models\City;
use App\Models\RealEstate;
use App\Models\Region;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        RealEstate::factory(20)->create([]);
    }
}
