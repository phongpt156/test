<?php

use Illuminate\Database\Seeder;

class ProductFeatureValueTableSeeder extends Seeder
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
        DB::table('product_feature_value')->truncate();
        for($i = 0; $i < 50; $i++) {
        	$product_feature_value = [
        		'product_id' => $i + 1,
        		'feature_id' => 1,
        		'feature_value' => $faker->colorName
        	];
        	DB::table('product_feature_value')->insert($product_feature_value);
        }
    }
}
