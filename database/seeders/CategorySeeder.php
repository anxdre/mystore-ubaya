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
            'name' => 'Kecantikan',
        ]);

        DB::table('categories')->insert([
            'name' => 'Alat Rumah Tangga',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bahan Mentah',
        ]);

        DB::table('categories')->insert([
            'name' => 'Bumbu Dapur',
        ]);

        DB::table('categories')->insert([
            'name' => 'Permainan',
        ]);

        DB::table('categories')->insert([
            'name' => 'Dress',
        ]);

        DB::table('categories')->insert([
            'name' => 'Kaos',
        ]);

        DB::table('categories')->insert([
            'name' => 'Celana',
        ]);

        DB::table('categories')->insert([
            'name' => 'Tas',
        ]);

        DB::table('categories')->insert([
            'name' => 'Sepatu',
        ]);

    }
}
