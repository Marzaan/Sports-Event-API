<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Raiyan',
            'email' => 'raiyan@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('users')->insert([
            'name' => 'Masud',
            'email' => 'masud@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('users')->insert([
            'name' => 'Marzan',
            'email' => 'marzan@gmail.com',
            'password' => bcrypt('12345'),
            'created_at' => '2021-07-24 01:16:23'
        ]);
    }
}
