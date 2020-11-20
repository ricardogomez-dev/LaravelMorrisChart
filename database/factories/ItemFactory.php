<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Item::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence,
        'text' => 'Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. ... "Lorem ipsum dolor sit amet, consectetur adipiscing elit...'
    ];
});
