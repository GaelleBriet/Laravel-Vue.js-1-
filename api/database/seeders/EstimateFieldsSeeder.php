<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstimateFields;

class EstimateFieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        EstimateFields::create([
            "name" => "Nom du projet",
            "slug" => "name",
            "type" => "text",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        EstimateFields::create([
            "name" => "Développement génériques",
            "slug" => "generic",
            "type" => "checkbox",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        EstimateFields::create([
            "name" => "Développements spécifiques",
            "slug" => "specific",
            "type" => "button",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        EstimateFields::create([
            "name" => "Type de projet",
            "slug" => "project",
            "type" => "select",
            "created_at" => now(),
            "updated_at" => now(),
        ]);

        EstimateFields::create([
            "name" => "Type de design",
            "slug" => "design",
            "type" => "select",
            "created_at" => now(),
            "updated_at" => now(),
        ]);
    }
}
