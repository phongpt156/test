<?php

use Illuminate\Database\Seeder;

class ProductImageTableSeeder extends Seeder
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
        DB::table('product_image')->truncate();
        for($i = 0; $i < 50; $i++) {
            $product_image = [
                'name' => 'http://i.imgur.com/91jQk1r.jpg',
                'alt' => $faker->word,
                'description' => $faker->realText($maxNbChars = 200, $indexSize = 1),
                'product_id' => $i + 1
            ];
            DB::table('product_image')->insert($product_image);
        }
    }
}
