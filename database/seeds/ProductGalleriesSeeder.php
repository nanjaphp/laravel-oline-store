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

//                ДІМ І САД
            ['id' => 30, 'photos' => 'public/images/mebli/1_comp_stil_1.webp', 'products_id' => 30],
            ['id' => 31, 'photos' => 'public/images/mebli/1_comp_stil_2.webp', 'products_id' => 31],
            ['id' => 32, 'photos' => 'public/images/mebli/1_comp_stil_3.webp', 'products_id' => 32],
            ['id' => 33, 'photos' => 'public/images/mebli/1_comp_stil_4.webp', 'products_id' => 33],
            ['id' => 34, 'photos' => 'public/images/mebli/1_comp_stil_5.webp', 'products_id' => 34],

            ['id' => 35, 'photos' => 'public/images/mebli/2_comp_krislo_1.webp', 'products_id' => 35],
            ['id' => 36, 'photos' => 'public/images/mebli/2_comp_krislo_2.webp', 'products_id' => 36],
            ['id' => 37, 'photos' => 'public/images/mebli/2_comp_krislo_3.webp', 'products_id' => 37],

            ['id' => 38, 'photos' => 'public/images/mebli/3_krovat_1.webp', 'products_id' => 38],
            ['id' => 39, 'photos' => 'public/images/mebli/3_krovat_2.webp', 'products_id' => 39],
            ['id' => 40, 'photos' => 'public/images/mebli/3_krovat_3.webp', 'products_id' => 40],

            ['id' => 41, 'photos' => 'public/images/mebli/4_komod_1.webp', 'products_id' => 41],
            ['id' => 42, 'photos' => 'public/images/mebli/4_komod_2.webp', 'products_id' => 42],
            ['id' => 43, 'photos' => 'public/images/mebli/4_komod_3.webp', 'products_id' => 43],

            ['id' => 44, 'photos' => 'public/images/mebli/5_shkaf_1.webp', 'products_id' => 44],
            ['id' => 45, 'photos' => 'public/images/mebli/5_shkaf_2.webp', 'products_id' => 45],

            ['id' => 46, 'photos' => 'public/images/mebli/6_tumba_1.webp', 'products_id' => 46],
            ['id' => 47, 'photos' => 'public/images/mebli/6_tumba_2.webp', 'products_id' => 47],

            ['id' => 48, 'photos' => 'public/images/mebli/7_stenka_1.webp', 'products_id' => 48],
            ['id' => 49, 'photos' => 'public/images/mebli/8_divan_1.webp', 'products_id' => 49],

//                АВТОМОБІЛИ
            ['id' => 50, 'photos' => 'public/images/audi_1_1.webp', 'products_id' => 50],
            ['id' => 51, 'photos' => 'public/images/audi_2_1.webp', 'products_id' => 51],
            ['id' => 52, 'photos' => 'public/images/dodge_1_1.webp', 'products_id' => 52],
            ['id' => 53, 'photos' => 'public/images/hyundai_1_1.webp', 'products_id' => 53],
            ['id' => 54, 'photos' => 'public/images/jeep_1_1.webp', 'products_id' => 54],
            ['id' => 55, 'photos' => 'public/images/kia_1_1.webp', 'products_id' => 55],
            ['id' => 56, 'photos' => 'public/images/mazda_1_1.webp', 'products_id' => 56],
            ['id' => 57, 'photos' => 'public/images/toyota_1_1.webp', 'products_id' => 57],
            ['id' => 58, 'photos' => 'public/images/volkswagen_1_1.webp', 'products_id' => 58],
            ['id' => 59, 'photos' => 'public/images/volkswagen_1_1.webp', 'products_id' => 59],

//                ТВАРИНИ
            ['id' => 60, 'photos' => 'public/images/1_dog_1.webp', 'products_id' => 60],
            ['id' => 61, 'photos' => 'public/images/1_dog_2.webp', 'products_id' => 61],
            ['id' => 62, 'photos' => 'public/images/1_dog_3.webp', 'products_id' => 62],
            ['id' => 63, 'photos' => 'public/images/1_dog_4.webp', 'products_id' => 63],
            ['id' => 64, 'photos' => 'public/images/1_dog_5.webp', 'products_id' => 64],
            ['id' => 65, 'photos' => 'public/images/1_dog_6.webp', 'products_id' => 65],

            ['id' => 66, 'photos' => 'public/images/2_cat_1.webp', 'products_id' => 66],
            ['id' => 67, 'photos' => 'public/images/2_cat_2.webp', 'products_id' => 67],
            ['id' => 68, 'photos' => 'public/images/2_cat_3.webp', 'products_id' => 68],
            ['id' => 69, 'photos' => 'public/images/2_cats_3.webp', 'products_id' => 69],


        ];

        DB::table('product_galleries')->insert($productGalleries);
    }
}


