<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $faker = Faker\Factory::create();
        DB::table('category')->truncate();
        for($i = 0; $i < 50; $i++) {
        	$category = [
        		'name' => $faker->word,
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'status' => $faker->boolean($chanceOfGettingTrue = 100)
        	];
        	DB::table('category')->insert($category);
        }
    }
}
