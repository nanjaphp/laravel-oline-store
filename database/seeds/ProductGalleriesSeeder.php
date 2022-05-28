<?php

namespace Database\Seeds;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductGalleriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $productGalleries = [
            ['id' => 1, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 1],
            ['id' => 2, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 2],
            ['id' => 3, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 3],
            ['id' => 4, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 4],
            ['id' => 5, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 5],
            ['id' => 6, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 6],
            ['id' => 7, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 7],
            ['id' => 8, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 8],
            ['id' => 9, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 9],
            ['id' => 10, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 10],
            ['id' => 11, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 11],
            ['id' => 12, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 12],
            ['id' => 13, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 13],
            ['id' => 14, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 14],
            ['id' => 15, 'photos' => 'assets/product/u9LkNGG76EpdgKlUxaFUxJuM5AwNoqJdKJFMBvQC.jpeg', 'products_id' => 15],

//                МОДА І СТИЛЬ

            ['id' => 16, 'photos' => 'public/images/shoes/reebok_1.jpg', 'products_id' => 16],
            ['id' => 17, 'photos' => 'public/images/shoes/reebok_2.jpg', 'products_id' => 17],
            ['id' => 18, 'photos' => 'public/images/shoes/reebok_3.jpg', 'products_id' => 18],

            ['id' => 19, 'photos' => 'public/images/shoes/puma_13.jpg', 'products_id' => 19],
            ['id' => 20, 'photos' => 'public/images/shoes/puma_12.jpg', 'products_id' => 20],
            ['id' => 21, 'photos' => 'public/images/shoes/puma_11.jpg', 'products_id' => 21],
            ['id' => 22, 'photos' => 'public/images/shoes/puma_10.jpg', 'products_id' => 22],
            ['id' => 23, 'photos' => 'public/images/shoes/puma_9.jpg', 'products_id' => 23],
            ['id' => 24, 'photos' => 'public/images/shoes/puma_8.jpg', 'products_id' => 24],
            ['id' => 25, 'photos' => 'public/images/shoes/puma_7.jpg', 'products_id' => 25],
            ['id' => 26, 'photos' => 'public/images/shoes/puma_6.jpg', 'products_id' => 26],
            ['id' => 27, 'photos' => 'public/images/shoes/puma_5.jpg', 'products_id' => 27],
            ['id' => 28, 'photos' => 'public/images/shoes/puma_4.jpg', 'products_id' => 28],

            ['id' => 29, 'photos' => 'public/images/shoes/adidas_1.jpg', 'products_id' => 29],

//                МОДА І СТИЛЬ
        ];

        DB::table('product_galleries')->insert($productGalleries);
    }
}


