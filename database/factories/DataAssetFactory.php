<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Domain\Asset\Models\DataAsset;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(DataAsset::class, function (Faker $faker) {
    return [
        'manufacture_id' => rand(1, 5),
        'description' => $faker->randomElement(['laptop', 'Desktop', 'Router', 'LED Monitor', 'Printer', 'Scanner', 'Network HUB']),
        'date_purchased' => $faker->date(),
    ];
});
