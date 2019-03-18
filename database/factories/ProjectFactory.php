<?php

use Faker\Generator as Faker;

$factory->define(App\Project::class, function (Faker $faker) {
    return [
        'title' => $faker->name,
        'description' =>$faker->realText(200, 2),
        'log_date' => $faker->dateTime,
    ];
});
