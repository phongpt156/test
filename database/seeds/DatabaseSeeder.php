<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CollectionTableSeeder::class);
        $this->call(CollectionImageTableSeeder::class);
        $this->call(SupplierTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
        $this->call(ProductTableSeeder::class);
        $this->call(ProductRatingTableSeeder::class);
        $this->call(ProductImageTableSeeder::class);
        $this->call(FeatureTableSeeder::class);
        $this->call(ProductFeatureValueTableSeeder::class);
        $this->call(FeatureDefaultSetTableSeeder::class);
    }
}
