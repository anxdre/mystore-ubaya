<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for($i=0; $i < 3; $i++){
            DB::table('products')->insert([
                'name'=> Str::random(10),
                'harga_jual'=> rand(10000,50000),
                'harga_produksi'=> rand(10000,50000),
                'stok'=> 50,
                'category_id'=> 1,
                'supplier_id'=> 4,
            ]);
        }

        for($i=0; $i < 3; $i++){
            DB::table('products')->insert([
                'name'=> Str::random(10),
                'harga_jual'=> rand(10000,50000),
                'harga_produksi'=> rand(10000,50000),
                'stok'=> 30,
                'category_id'=> 3,
                'supplier_id'=> 5,
            ]);
        }

        for($i=0; $i < 3; $i++){
            DB::table('products')->insert([
                'name'=> Str::random(10),
                'harga_jual'=> rand(10000,50000),
                'harga_produksi'=> rand(10000,50000),
                'stok'=> 20,
                'category_id'=> 6,
                'supplier_id'=> 3,
            ]);
        }

        for($i=0; $i < 3; $i++){
            DB::table('products')->insert([
                'name'=> Str::random(10),
                'harga_jual'=> rand(10000,50000),
                'harga_produksi'=> rand(10000,50000),
                'stok'=> 10,
                'category_id'=> 7,
                'supplier_id'=> 2,
            ]);
        }

        for($i=0; $i < 3; $i++){
            DB::table('products')->insert([
                'name'=> Str::random(10),
                'harga_jual'=> rand(10000,50000),
                'harga_produksi'=> rand(10000,50000),
                'stok'=> 60,
                'category_id'=> 9,
                'supplier_id'=> 1,
            ]);
        }

        
        
    }
}
