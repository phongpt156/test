<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
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
        DB::table('product')->truncate();
        for($i = 0; $i < 50; $i++) {
        	$price = $faker->randomNumber($nbDigits = null);
        	$product = [
        		'name' => $faker->word,
        		'price' => $price,
        		'discount' => $faker->numberBetween($min = 0, $max = $price),
        		'description' => $faker->realText($maxNbChars = 200, $indexSize = 1),
        		'status' => $faker->boolean($chanceOfGettingTrue = 100),
        		'cate_id' => $i + 1,
                'supplier_id' => $i + 1,
                'collection_id' => $i + 1,
                'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')


        	];
        	DB::table('product')->insert($product);
        }
    }
}
