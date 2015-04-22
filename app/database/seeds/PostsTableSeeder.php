<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostsTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		foreach(range(1, 10) as $index) //creates 10 post
		{
			Post::create([
                             'title' => $faker->sentence(),
                              //'body' => $faker->paragraph(),
                            'body' => $faker->realText(500), //500chars
                            'user_id' => rand(1,2),
			]);
		}
	}

}