<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Product::class, 20)->create()->each( function(App\Product $product){
            $product->images()->attach([
                rand(1,20),
                rand(21,40),
                rand(41,60)
            ]);
        } );
    }
}
