<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class CalendarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	factory(App\Calendar::class, 30)->create();
    }
}
