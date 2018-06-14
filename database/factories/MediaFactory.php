<?php

use Faker\Generator as Faker;
use App\User;
use App\Calendar;

$factory->define(App\Media::class, function (Faker $faker) {
    return [
        'type' => $faker->randomElement($array = array ('photo', 'video')),
        'calendar_id' => App\Calendar::all()->random()->id,
        'mood' => $faker->randomElement($array = array ('good', 'bad', 'love')),
        'title' => $faker -> text(50),
        'body' => $faker -> text(150),
        'mediaUrl' => $faker -> text(20),
    ];
});
