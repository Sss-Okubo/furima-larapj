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
        $this->call(GoodsTableSeeder::class);
        $this->call(ImageTableSeeder::class);
        $this->call(CategoryTableSeeder::class);
    }
}
