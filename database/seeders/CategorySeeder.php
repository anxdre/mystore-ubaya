<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Trending',
        ]);

        DB::table('categories')->insert([
            'name' => 'Baju',
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana',
        ]);

        DB::table('categories')->insert([
            'name' => 'Peralatan Makan',
        ]);

        DB::table('categories')->insert([
            'name' => 'Mainan',
        ]);

        DB::table('categories')->insert([
            'name' => 'Sepatu',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tas',
        ]);

        DB::table('categories')->insert([
            'name' => 'Lainnya',
        ]);

    }
}
