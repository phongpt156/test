<?php

use Illuminate\Database\Seeder;

class ProductRatingTableSeeder extends Seeder
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
        DB::table('product_rating')->truncate();
        for($i = 0; $i < 50; $i++) {
        	$product_rating = [
        		'like' => $faker->numberBetween($min = 1, $max = 3000),
        		'follow' => $faker->numberBetween($min = 1, $max = 3000),
        		'buy' => $faker->numberBetween($min = 1, $max = 3000),
                'product_id' => $i + 1
        	];
        	DB::table('product_rating')->insert($product_rating);
        }
    }
}
