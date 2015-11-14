<?php
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PruebaTableSeeder extends Seeder{

	public function run()
	{
		$faker=Faker::create();
		\DB::table("users")->insert(array(
			'name'  => 'brayan',
			'email' => 'picaro910@gmail.com',
			'password' => \Hash::make('secret'),
			'type' => 'admin'
		));
		\DB::table("persona")->insert(array(
			'nombre'=>'dilan'
			)
		);
		for ($i=0; $i <100 ; $i++) { 
			\DB::table("persona")->insert(array(
			'nombre'=>$faker->firstName
			)
		);	
		}
	}
}