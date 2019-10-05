<?php

use Illuminate\Database\Seeder;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('products')->insert([
        //     "name" => "Produk A",
        //     "description" => "This product created by seeder"
        // ]);

        // $produk1 = new Product;
        // $produk1->name = "Produk A";
        // $produk1->description = "This product created from model";
        // $produk1->save();

        Product::create([
            'name' => "Produk A",
            'description' => 'This product created by seeder'
        ]);
    }
}
