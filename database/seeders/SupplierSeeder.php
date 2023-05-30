<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('suppliers')->insert([
            'name' => 'Lola Sally',
            'address'=>'Jl.Merpati No. 3',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'SunGlow',
            'address'=>'Jl.Sutomo No. 98',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'CharmEverywhere',
            'address'=>'Jl.Rungkut No. 5A',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'SiJual',
            'address'=>'Jl.Soekarno No. 54',
        ]);

        DB::table('suppliers')->insert([
            'name' => 'YukAyok',
            'address'=>'Jl.Titik No. 7',
        ]);
    }
}
