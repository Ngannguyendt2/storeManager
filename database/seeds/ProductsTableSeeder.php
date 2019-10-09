<?php

use App\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0;$i<10;$i++){
            $product=new Product();
            $product->name=Str::random(20);
            $product->productCode=Str::random(20);
            $product->price=rand(1,100000000);
            $product->image=Str::random(50);
            $product->detail=Str::random(50);
            $product->save();
        }
    }
}
