<?php

namespace Database\Seeders;

use App\Models\EstimateFields;
use Illuminate\Database\Seeder;
use Database\Seeders\EstimateTableSeeder;
use Database\Seeders\EstimateLinesSeeder;
use Database\Seeders\EstimateFieldsSeeder;
use Database\Seeders\EstimatePresetValuesSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(EstimateTableSeeder::class);
        $this->call(EstimateLinesSeeder::class);
        $this->call(EstimateFieldsSeeder::class);
        $this->call(EstimatePresetValuesSeeder::class);
        // \App\Models\User::factory(10)->create();
    }
}
