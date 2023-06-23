<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'name' => '"Семерка"',
                'code' => 'seven',
                'description' => 'Мощность 2,1 кВт подойдет для для охлаждения комнаты площадью до 21 м2',
                'image' => 'categories/seven.jpg',
            ],
            [
                'name' => '"Девятка"',
                'code' => 'nine',
                'description' => 'Мощность 2,7 кВт подойдет для для охлаждения комнаты площадью до 27 м2',
                'image' => 'categories/nine.jpg',
            ],
            [
                'name' => '"Двенадцатка"',
                'code' => 'twelve',
                'description' => 'Мощность 3,6 кВт подойдет для для охлаждения комнаты площадью до 36 м2',
                'image' => 'categories/twelve.jpg',
            ],
        ]);
    }
}
