<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Page;
use Faker\Generator as Faker;

$factory->define(Page::class, function (Faker $faker) {
    return [
        'category_id' => 1,
        
        'slug' => $faker->unique()->slug(1),
        'name' => $faker->sentence(3),
        'content' => $faker->text(100),
    ];
});
