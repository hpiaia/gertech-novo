<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Solution;
use Faker\Generator as Faker;

$factory->define(Solution::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(3),
        'cover_image' => $faker->imageUrl(),
        'category_id' => factory(Category::class),
        'description' => $faker->paragraph(),
        'short_description' => $faker->text(140),
        'specifications' => ['foo' => 'bar', 'fee' => 'baz']
    ];
});
