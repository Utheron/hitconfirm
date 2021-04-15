<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Game;
use Faker\Generator as Faker;

$factory->define(Game::class, function (Faker $faker) {
    return [
        'slug' => $faker->unique()->slug(2),
        'name' => $faker->sentence(3),
        'cover' => 'https://place-hold.it/1280x720',
        'versions' => '["1.02","2.52","version B"]'
    ];
});
