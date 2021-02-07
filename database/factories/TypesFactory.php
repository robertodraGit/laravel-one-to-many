<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Type;
use Faker\Generator as Faker;

$factory->define(Type::class, function (Faker $faker) {
    return [
        'name' => $faker -> unique() -> word(),
        'description' => $faker -> sentence(5)
    ];
});
