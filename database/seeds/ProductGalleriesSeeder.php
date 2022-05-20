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
        ];

        DB::table('product_galleries')->insert($productGalleries);
    }
}


