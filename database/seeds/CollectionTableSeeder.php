<?php

use Illuminate\Database\Seeder;

class CollectionTableSeeder extends Seeder
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
        DB::table('collection')->truncate();
        for( $i = 0; $i < 50; $i++) {
        	$collection = [
                'name' => '',
        		'status' => 1,
                'created_at' => $faker->date($format = 'Y-m-d H:i:s', $max = 'now')
        	];
        	DB::table('collection')->insert($collection);
        }
    }
}
