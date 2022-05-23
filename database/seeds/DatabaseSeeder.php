<?php

use Database\Seeds\CategoriesSeeder;
use Database\Seeds\CitiesSeeder;
use Database\Seeds\RegionsSeeder;
use Database\Seeds\UsersSeeder;
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
        $this->call([
            UsersSeeder::class,
            RegionsSeeder::class,
            CitiesSeeder::class,
            CategoriesSeeder::class,
        ]);
    }
}
