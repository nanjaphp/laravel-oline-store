<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Дитячий світ', 'photo' => 'child.png', 'slug' => 'child'],
            ['name' => 'Нерухомість', 'photo' => 'key.png', 'slug' => 'key'],
            ['name' => 'Авто', 'photo' => 'car.png', 'slug' => 'car'],
            ['name' => 'Запчастини', 'photo' => 'tool.png', 'slug' => 'tool'],
            ['name' => 'Тварини', 'photo' => 'dog.png', 'slug' => 'dog'],
            ['name' => 'Дім й сад', 'photo' => 'chear.png', 'slug' => 'chear'],
            ['name' => 'Електроника', 'photo' => 'phone.png', 'slug' => 'phone'],
            ['name' => 'Мода і стиль', 'photo' => 'cloth.png', 'slug' => 'cloth'],
            ['name' => 'Спорт', 'photo' => 'ball.png', 'slug' => 'ball'],
        ];

        DB::table('categories')->insert($categories);
    }
}
