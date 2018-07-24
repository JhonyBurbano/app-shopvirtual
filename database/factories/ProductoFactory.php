<?php

use Faker\Generator as Faker;

$factory->define(App\Producto::class, function (Faker $faker) {
    return [
        'categoria_id' => $faker->numberBetween(1, 5),
        'nombre' => $faker->sentence(6),
        'descripcion' => $faker->sentence(10),
        'descripcion_larga' => $faker->text,
        'precio' => $faker->randomFloat(2, 5, 150)
    ];
});
