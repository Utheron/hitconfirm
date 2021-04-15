<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Post;
use Carbon\Carbon;
use Faker\Generator as Faker;

$factory->define(Post::class, function (Faker $faker) {
    return [
        'user_id' => 1,
        'category_id' => $faker->numberBetween(1,3),
        
        'slug' => $faker->unique()->slug(3),
        'name' => $faker->unique()->sentence(4),
        'content' => $faker->text(100),
        'header' => 'https://place-hold.it/1280x720',
        'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
        'updated_at' => Carbon::now()->format('Y-m-d H:i:s')
    ];
});
