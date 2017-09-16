<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder {

	public function run()
	{
		$faker = Faker::create();

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

		DB::table('users')->truncate();
		DB::table('users')->insert(
		    array(
		    	'full_name' 		=>	$faker->name,
		    	'email' 			=> 	'test@humimo.com',
		    	'password'			=>	Hash::make('mimosecret'),
		    	'tasks_created' 	=> 	1,
		    	)
		);

		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	}
}
