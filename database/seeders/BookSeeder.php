<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'name' => 'Mai Xuân Cường',
            'isbn' => '123',
            'author' => 'Cường Xuân Mai',
            'type' => 'Truyện kinh dị',
            'number_pages' => '147',
            'year' => '2022'
        ]);
        DB::table('books')->insert([
            'name' => 'Mai Xuân Tân',
            'isbn' => '124',
            'author' => 'Tân Xuân Mai',
            'type' => 'Truyện kinh dị',
            'number_pages' => '147',
            'year' => '2022'
        ]);
        DB::table('books')->insert([
            'name' => 'Hải Mai Xuân',
            'isbn' => '125',
            'author' => 'Tân Xuân Mai',
            'type' => 'Truyện Cười',
            'number_pages' => '148',
            'year' => '2021'
        ]);
        DB::table('books')->insert([
            'name' => 'Mai Xuân Vinh',
            'isbn' => '128',
            'author' => 'Vinh Xuân Xuân',
            'type' => 'Truyện Cười',
            'number_pages' => '147',
            'year' => '2012'
        ]);
        DB::table('books')->insert([
            'name' => 'Mai Xuân Thuần',
            'isbn' => '129',
            'author' => 'Vinh Xuân Thuần',
            'type' => 'Truyện Cười',
            'number_pages' => '147',
            'year' => '2012'
        ]);
        DB::table('books')->insert([
            'name' => 'Mai Xuân Thảo',
            'isbn' => '128',
            'author' => 'Thảo Xuân Cường',
            'type' => 'Tiểu Thuyế',
            'number_pages' => '147',
            'year' => '2012'
        ]);
    }
}
