<?php

use Faker\Generator as Faker;

$factory->define(\App\Domains\Artists\ArtistModel::class, function (Faker $faker) {
    return [
        'artistic_name' => $faker->name
    ];
});