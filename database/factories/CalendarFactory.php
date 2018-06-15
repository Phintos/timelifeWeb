<?php

use Faker\Generator as Faker;

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

$factory->define(App\Calendar::class, function (Faker $faker) {
    return [
        'mood' => $faker->randomElement($array = array ('good', 'bad', 'love')),
        'user_id' => App\User::all()->random()->id,
        'calendar_date' => $faker->date($format = 'y-m-d', $max = 'now'),
    ];
});
