<?php

use Faker\Generator as Faker;

$factory->define(App\Categoria::class, function (Faker $faker) {
    return [
        'nombre' => ucfirst($faker->word),
        'descripcion' => $faker->sentence(10)
    ];
});
