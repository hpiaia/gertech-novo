<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Banner;
use Faker\Generator as Faker;

$factory->define(Banner::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(),
        'description' => $faker->paragraph(),
        'button_text' => $faker->word(),
        'url' => $faker->url,
        'image' => $faker->imageUrl(1024, 768)
    ];
});
