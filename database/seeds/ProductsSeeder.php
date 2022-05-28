<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            ['id' => 1, 'name' => 'Iphone 6s neverlock', 'users_id' => 1, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock'],
            ['id' => 2, 'name' => 'Iphone 6s neverlock', 'users_id' => 2, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock1'],
            ['id' => 3, 'name' => 'Iphone 6s neverlock', 'users_id' => 3, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock2'],
            ['id' => 4, 'name' => 'Iphone 6s neverlock', 'users_id' => 4, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock3'],
            ['id' => 5, 'name' => 'Iphone 6s neverlock', 'users_id' => 5, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock4'],
            ['id' => 6, 'name' => 'Iphone 6s neverlock', 'users_id' => 6, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock5'],
            ['id' => 7, 'name' => 'Iphone 6s neverlock', 'users_id' => 7, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock6'],
            ['id' => 8, 'name' => 'Iphone 6s neverlock', 'users_id' => 8, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock7'],
            ['id' => 9, 'name' => 'Iphone 6s neverlock', 'users_id' => 9, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock8'],
            ['id' => 10, 'name' => 'Iphone 6s neverlock', 'users_id' => 10, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock9'],
            ['id' => 11, 'name' => 'Iphone 6s neverlock', 'users_id' => 11, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock10'],
            ['id' => 12, 'name' => 'Iphone 6s neverlock', 'users_id' => 12, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock11'],
            ['id' => 13, 'name' => 'Iphone 6s neverlock', 'users_id' => 13, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock12'],
            ['id' => 14, 'name' => 'Iphone 6s neverlock', 'users_id' => 14, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock13'],
            ['id' => 15, 'name' => 'Iphone 6s neverlock', 'users_id' => 15, 'categories_id' => 7, 'price' => 3200.00, 'description' => '<p>Новий</p>', 'slug' => 'iphone-6s-neverlock14'],

//            МОДА І СТИЛЬ

            ['id' => 16, 'name' => 'Reebok 1', 'users_id' => 17, 'categories_id' => 8, 'price' => 2000.00, 'description' => '<p>Новий</p>', 'slug' => 'Reebok 1'],
            ['id' => 17, 'name' => 'Reebok 2', 'users_id' => 18, 'categories_id' => 8, 'price' => 2500.00, 'description' => '<p>Новий</p>', 'slug' => 'Reebok 2'],
            ['id' => 18, 'name' => 'Reebok 3', 'users_id' => 19, 'categories_id' => 8, 'price' => 2500.00, 'description' => '<p>Новий</p>', 'slug' => 'Reebok 3'],

            ['id' => 19, 'name' => 'Puma 13', 'users_id' => 19, 'categories_id' => 8, 'price' => 2800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 13'],
            ['id' => 20, 'name' => 'Puma 12', 'users_id' => 19, 'categories_id' => 8, 'price' => 2800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 12'],
            ['id' => 21, 'name' => 'Puma 11', 'users_id' => 19, 'categories_id' => 8, 'price' => 2800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 11'],
            ['id' => 22, 'name' => 'Puma 10', 'users_id' => 19, 'categories_id' => 8, 'price' => 2800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 10'],
            ['id' => 23, 'name' => 'Puma 9', 'users_id' => 19, 'categories_id' => 8, 'price' => 2800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 9'],
            ['id' => 24, 'name' => 'Puma 8', 'users_id' => 19, 'categories_id' => 8, 'price' => 2100.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 8'],
            ['id' => 25, 'name' => 'Puma 7', 'users_id' => 19, 'categories_id' => 8, 'price' => 2100.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 7'],
            ['id' => 26, 'name' => 'Puma 6', 'users_id' => 19, 'categories_id' => 8, 'price' => 1800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 6'],
            ['id' => 27, 'name' => 'Puma 5', 'users_id' => 19, 'categories_id' => 8, 'price' => 1800.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 5'],
            ['id' => 28, 'name' => 'Puma 4', 'users_id' => 19, 'categories_id' => 8, 'price' => 1500.00, 'description' => '<p>Новий</p>', 'slug' => 'Puma 4'],

            ['id' => 29, 'name' => 'Adidas 1', 'users_id' => 19, 'categories_id' => 8, 'price' => 2000.00, 'description' => '<p>Новий</p>', 'slug' => 'Adidas 1'],
        ];


        DB::table('products')->insert($products);
    }
}


