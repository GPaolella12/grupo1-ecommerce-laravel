<?php

use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<70; $i++){

            DB::table('products')->insert([
                'name' => 'Producto de prueba',
                'brand_id' => rand(1,7),
                'category_id' => rand(1,3),
                'price' => rand(10000, 120000),
                'stock' => rand(1,40),
            ]);
        }
    }
}
