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

        ];

        DB::table('products')->insert($products);
    }
}


