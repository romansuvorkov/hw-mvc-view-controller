<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            'filling' => 'Клубника',
            'price' => 100,
            'type_id' => 1,
        ]);

        DB::table('products')->insert([
            'filling' => 'Шоколад',
            'price' => 150,
            'type_id' => 2,
        ]);

        DB::table('products')->insert([
            'filling' => 'Шоколад',
            'price' => 110,
            'type_id' => 3,
        ]);

        DB::table('products')->insert([
            'filling' => 'Без начинки',
            'price' => 100,
            'type_id' => 1,
        ]);

        DB::table('products')->insert([
            'filling' => 'Черника',
            'price' => 130,
            'type_id' => 2,
        ]);

        DB::table('products')->insert([
            'filling' => 'Малина',
            'price' => 170,
            'type_id' => 3,
        ]);

    }
}
