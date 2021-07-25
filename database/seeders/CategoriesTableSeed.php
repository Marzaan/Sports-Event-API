<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            'category' => 'Cricket',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Football',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Badminton',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Golf',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Tennis',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Boxing',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Basketball',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('categories')->insert([
            'category' => 'Carrom',
            'created_at' => '2021-07-24 01:16:23'
        ]);
    }
}
