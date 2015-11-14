<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class UserTableSeeder extends Seeder{

	public function run()
	{
		$faker=Faker::create();
		for ($i=0; $i < 30; $i++) { 

			$id=\DB::table("users")->insertGetId(array(
			'name'  => $faker->firstName.' '.$faker->lastName,
			'email' => $faker->unique()->email(),
			'password' => \Hash::make('123456'),
			'type' => 'user'
			));	
			\DB::table("user_profile")->insert(array(
				'user_id'=>$id,
				'web_site'=>'http://www.'.$faker->domainName,
				'bio' =>$faker->paragraph(rand(2,5))


			));
		}
	}
}