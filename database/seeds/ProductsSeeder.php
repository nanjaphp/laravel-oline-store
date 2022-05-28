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

//                ДІМ І САД
            ['id' => 30, 'name' => "Комп'ютерний стіл 1", 'users_id' => 20, 'categories_id' => 8, 'price' => 8000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерний стіл 1"],
            ['id' => 31, 'name' => "Комп'ютерний стіл 2", 'users_id' => 20, 'categories_id' => 8, 'price' => 4000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерний стіл 2"],
            ['id' => 32, 'name' => "Комп'ютерний стіл 3", 'users_id' => 20, 'categories_id' => 8, 'price' => 4000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерний стіл 3"],
            ['id' => 33, 'name' => "Комп'ютерний стіл 4", 'users_id' => 20, 'categories_id' => 8, 'price' => 4000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерний стіл 4"],
            ['id' => 34, 'name' => "Комп'ютерний стіл 5", 'users_id' => 20, 'categories_id' => 8, 'price' => 3500.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерний стіл 5"],

            ['id' => 35, 'name' => "Комп'ютерне крісло 1", 'users_id' => 20, 'categories_id' => 8, 'price' => 4000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерне крісло 1"],
            ['id' => 36, 'name' => "Комп'ютерне крісло 2", 'users_id' => 20, 'categories_id' => 8, 'price' => 3500.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерне крісло 2"],
            ['id' => 37, 'name' => "Комп'ютерне крісло 3", 'users_id' => 20, 'categories_id' => 8, 'price' => 3000.00, 'description' => '<p>Новий</p>', 'slug' => "Комп'ютерне крісло 3"],

            ['id' => 38, 'name' => 'Ліжко 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Ліжко 1'],
            ['id' => 39, 'name' => 'Ліжко 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Ліжко 2'],
            ['id' => 40, 'name' => 'Ліжко 3', 'users_id' => 20, 'categories_id' => 8, 'price' => 9000.00, 'description' => '<p>Новий</p>', 'slug' => 'Ліжко 3'],

            ['id' => 42, 'name' => 'Комод 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 4500.00, 'description' => '<p>Новий</p>', 'slug' => 'Комод 1'],
            ['id' => 41, 'name' => 'Комод 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 4500.00, 'description' => '<p>Новий</p>', 'slug' => 'Комод 2'],
            ['id' => 43, 'name' => 'Комод 3', 'users_id' => 20, 'categories_id' => 8, 'price' => 4400.00, 'description' => '<p>Новий</p>', 'slug' => 'Комод 3'],

            ['id' => 44, 'name' => 'Шкаф 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 8900.00, 'description' => '<p>Новий</p>', 'slug' => 'Шкаф 1'],
            ['id' => 45, 'name' => 'Шкаф 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Шкаф 2'],

            ['id' => 46, 'name' => 'Тумба 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Тумба 1'],
            ['id' => 47, 'name' => 'Тумба 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Тумба 2'],

            ['id' => 48, 'name' => 'Стінка 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 10000.00, 'description' => '<p>Новий</p>', 'slug' => 'Стінка 1'],
            ['id' => 49, 'name' => 'Диван 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 13000.00, 'description' => '<p>Новий</p>', 'slug' => 'Диван 1'],

//                АВТОМОБІЛИ
            ['id' => 50, 'name' => 'Audi 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 500000.00, 'description' => '<p>Новий</p>', 'slug' => 'Audi 1'],
            ['id' => 51, 'name' => 'Audi 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 300000.00, 'description' => '<p>Новий</p>', 'slug' => 'Audi 2'],
            ['id' => 52, 'name' => 'Dodge 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 600000.00, 'description' => '<p>Новий</p>', 'slug' => 'Dodge 1'],
            ['id' => 53, 'name' => 'Hyundai 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 300000.00, 'description' => '<p>Новий</p>', 'slug' => 'Hyundai 1'],
            ['id' => 54, 'name' => 'Jeep 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 550000.00, 'description' => '<p>Новий</p>', 'slug' => 'Jeep 1'],
            ['id' => 55, 'name' => 'Kia 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 400000.00, 'description' => '<p>Новий</p>', 'slug' => 'Kia 1'],
            ['id' => 56, 'name' => 'Mazda 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 440000.00, 'description' => '<p>Новий</p>', 'slug' => 'Mazda 1'],
            ['id' => 57, 'name' => 'Toyota 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 390000.00, 'description' => '<p>Новий</p>', 'slug' => 'Toyota 1'],
            ['id' => 58, 'name' => 'Volkswagen 1', 'users_id' => 20, 'categories_id' => 8, 'price' => 380000.00, 'description' => '<p>Новий</p>', 'slug' => 'Volkswagen 1'],
            ['id' => 59, 'name' => 'Volkswagen 2', 'users_id' => 20, 'categories_id' => 8, 'price' => 400000.00, 'description' => '<p>Новий</p>', 'slug' => 'Volkswagen 2']
        ];


        DB::table('products')->insert($products);
    }
}


