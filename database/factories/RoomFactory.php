<?php

use App\Models\Room;
use Faker\Generator as Faker;

$factory->define(Room::class, function (Faker $faker) {
    return [
        'name' => $faker->words(5, true),
        'description' => $faker->paragraph,
    ];
});