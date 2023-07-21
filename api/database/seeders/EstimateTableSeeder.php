<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\Estimate;

class EstimateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) :
            $estimate = new Estimate([
                "name" => $faker->sentence(2),
                "total_time" => $faker->numberBetween(5, 146),
                "created_at" => now(),
                "updated_at" => now(),
            ]);
            $estimate->save();
        endfor;
    }
}
