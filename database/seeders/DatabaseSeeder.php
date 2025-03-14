<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Models\ProductData;
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

      Company::factory(20)->create();
      ProductData::factory(20)->create();
      user::factory(5)->create();
    }
}
