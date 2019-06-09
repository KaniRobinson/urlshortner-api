<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Visit;
use Faker\Generator as Faker;

$factory->define(Visit::class, function (Faker $faker) {
    return [
        'ip_address' => $faker->ipv4,
        'country' => $faker->country,
        'refereer_url' => $faker->url,
    ];
});
