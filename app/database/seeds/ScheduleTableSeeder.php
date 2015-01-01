<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class ScheduleTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();
        Eloquent::unguard();
        DB::table('schedules')->truncate();
        Schedule::create([
                'title' => $faker->text(200),
                'url' => 'http://www.example.com',
                'class' => 'event-important',
                'start' => '2015-01-03 01:00:00',
                'end' => '2015-01-15 23:00:00']);
	}
}
