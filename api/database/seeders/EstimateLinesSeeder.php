<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use App\Models\EstimateLines;
use App\Models\Estimate;

class EstimateLinesSeeder extends Seeder
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
        $faker = Faker::create();

        // récupérer les estimates existantes
        $estimates = Estimate::all();

        for ($i = 0; $i < 20; $i++) :
            // récupérer une estimate existante pour la clé
            $estimate = $estimates->random();

            $estimateLine = new EstimateLines([
                "label" => self::$labels[$i],
                "time" => $faker->numberBetween(1, 10),
                "type" => self::$types[array_rand(self::$types)],
                "estimate_id" => $estimate->id,
                "created_at" => now(),
                "updated_at" => now(),
            ]);
            $estimateLine->save();
        endfor;
    }
}
