<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Venue;
use Faker\Generator as Faker;

$factory->define(Venue::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug(4),
        'name' => $faker->sentence(3),
        'infos' => '[
            "Port du masque obligatoire",
            "Parking gratuit",
            "Nombreux restaurants aux alentours",
            "Pas de consommation extérieure",
            "Bar accessible sur place",
            "Alcool avec modération"
        ]',
        'address' => $faker->streetAddress,
        'zip' => $faker->postcode,
        'city' => $faker->city,
        'map_url' => $faker->url,
        'transports' => '[ ["LeCar ligne 51", "Plan de Campagne", "https://e5ee40cd-d435-4c44-a99f-812b308c75f1.filesusr.com/ugd/ef29c5_d25aa1e912b04420af6ef90c3bb14e87.pdf"], ["LeCar ligne 51", "Plan de Campagne", "https://e5ee40cd-d435-4c44-a99f-812b308c75f1.filesusr.com/ugd/ef29c5_d25aa1e912b04420af6ef90c3bb14e87.pdf"] ]'
    ];
});
