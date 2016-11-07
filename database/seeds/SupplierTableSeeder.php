<?php

use Illuminate\Database\Seeder;

class SupplierTableSeeder extends Seeder
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
        DB::table('supplier')->truncate();
        for($i = 0; $i < 50; $i ++) {
        	$supplier = [
        		'name' => $faker->company,
        		'address' => $faker->address,
        		'status' => $faker->boolean($chanceOfGettingTrue = 100)
        	];
        	DB::table('supplier')->insert($supplier);
        }
    }
}
