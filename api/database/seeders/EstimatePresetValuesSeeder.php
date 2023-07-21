<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\EstimatePresetValues;
use App\Models\EstimateFields;

class EstimatePresetValuesSeeder extends Seeder
{
    static array $labels = [
        "Mise en place du projet",
        "Homepage",
        "Blog",
        "Offres d'emplois",
        "Évènements",
        "Module météo",
        "Galerie d'images",
        "Page de contact",
        "Inscription/Connexion des utilisateurs",
        "Paiement en ligne",
        "Espace utilisateur",
        "Formulaire de contact",
        "Chat en direct",
        "Gestion des commentaires",
        "Système de recherche",
        "Intégration des médias sociaux",
        "Système de notifications",
        "Système de messagerie interne",
        "Suivi des performances (analytiques)",
        "Gestion des droits d'accès (rôles et autorisations)"
    ];

    static array $types = [
        "Laravel",
        "Laravel et Vue.js"
    ];

    static array $designs = [
        "Simple",
        "Complexe",
        "Complexe avec animations"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $genericFields = EstimateFields::where('slug', 'generic')->first();
        $projectFields = EstimateFields::where('slug', 'project')->first();
        $designFields = EstimateFields::where('slug', 'design')->first();

        for ($i = 0; $i < 20; $i ++) {
            EstimatePresetValues::create([
                "label" => self::$labels[$i],
                "value" => self::$labels[$i],
                "time" => null,
                "startup_time" => null,
                "total_percentage" => null,
                "estimate_field_id" => $genericFields->id,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }

        for ($i = 0; $i < 2; $i ++) {
            EstimatePresetValues::create([
                "label" => self::$types[$i],
                "value" => self::$types[$i],
                "time" => null,
                "startup_time" => null,
                "total_percentage" => null,
                "estimate_field_id" => $projectFields->id,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }

        for ($i = 0; $i < 3; $i ++) {
            EstimatePresetValues::create([
                "label" => self::$designs[$i],
                "value" => self::$designs[$i],
                "time" => null,
                "startup_time" => null,
                "total_percentage" => null,
                "estimate_field_id" => $designFields->id,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
        }
    }
}
