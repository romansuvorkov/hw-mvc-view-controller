<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//        $this->call(ProductSeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);
        // User::factory(10)->create();
    }
}
