<?php

namespace Database\Seeds;

use App\Models\Region;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RegionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $regions = [
            ["name" =>"Київ"],
            ["name" =>"Харківська область"],
            ["name" =>"Одеська область"],
            ["name" =>"Дніпропетровська область"],
            ["name" =>"Донецька область"],
            ["name" =>"Запорізька область"],
            ["name" =>"Львівська область"],
            ["name" =>"Миколаївська область"],
            ["name" =>"Севастополь"],
            ["name" =>"Луганська область"],
            ["name" =>"Вінницька область"],
            ["name" =>"АР Крим"],
            ["name" =>"Херсонська область"],
            ["name" =>"Чернігівська область"],
            ["name" =>"Полтавська область"],
            ["name" =>"Черкаська область"],
            ["name" =>"Хмельницька область"],
            ["name" =>"Чернівецька область"],
            ["name" =>"Житомирська область"],
            ["name" =>"Сумська область"],
            ["name" =>"Рівненська область"],
            ["name" =>"Івано-Франківська область"],
            ["name" =>"Кіровоградська область"],
            ["name" =>"Тернопільська область"],
            ["name" =>"Волинська область"],
            ["name" =>"Київська область"],
            ["name" =>"Закарпатська область"],
            ["name" =>"м. Севастополь"],
        ];

        DB::table('regions')->insert($regions);
    }
}