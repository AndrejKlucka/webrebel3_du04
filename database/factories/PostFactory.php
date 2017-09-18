<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'user_id' => $faker->numberBetween($min = 1, $max = 10), 
        'title' => $faker->sentence(mt_rand(3, 10)), 
        'text' => join("\n\n", $faker->paragraphs(mt_rand(3, 6)))
    ];
});
