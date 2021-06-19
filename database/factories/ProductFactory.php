<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    return [
        'name'=>  $faker->unique()->name,
        'slug'=> $faker->unique()->name,
        'details' => $faker->name,
        'price'=> $faker->randomFloat(2, 10, 100),
        'shipping' => rand(0,1),
        'description' => $faker->sentence(50),
        'category_id' => rand(0,3),
        'brand_id' => rand(0,3),
        'image_path' => '',
    ];
});
