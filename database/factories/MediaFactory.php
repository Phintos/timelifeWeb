<?php

use Faker\Generator as Faker;
use App\User;
use App\Calendar;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('photo', 'video')) ,
        // 'id_user' => factory('App\User')->create()->id,
        'id_user' => App\User::all()->random()->id,
        'id_calendar' => App\Calendar::all()->random()->id,
        'mood' => $faker->randomElement($array = array ('good', 'bad', 'love')),
        'title' => $faker -> text(50),
        'body' => $faker -> text(150),
        'mediaUrl' => $faker -> text(20),
    ];
});
