<?php

use Faker\Generator as Faker;

$factory->define(App\ProductoImage::class, function (Faker $faker) {
    return [
        'image' => $faker->imageUrl(250, 250),
        'producto_id'=> $faker->numberBetween(1, 100)
    ];
});
