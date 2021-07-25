<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EventsTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('events')->insert([
            'category' => 'Cricket',
            'event' => 'BD vs IND',
            'description' => 'Ashia Cup Final Ashia Cup Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/p654jiH50KOszAw8Y3X945Kb8cwlbGJ3UWh0AL6E.jpg',
            'featured' => 'Yes',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Cricket',
            'event' => 'BD vs PAK',
            'description' => 'Ashia Cup Semi Final Ashia Cup Semi Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/TDnyPW70zvFS9NMpm6JlsALQLnvvTScxBXAYLwtO.png',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Football',
            'event' => 'BD vs Afgan',
            'description' => 'World Cup Qualifier Round 3',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/sddxZqOO35JB5q9poZuFWWUn9ZgGhYHzth71dW39.png',
            'featured' => 'Yes',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Badminton',
            'event' => 'Salman vs Arik',
            'description' => 'Indoor Cup Final Indoor Cup Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/Tc9CzkLc5GatmPSun4OukDYHx4XU9D0kb9bGX6Li.jpg',
            'featured' => 'Yes',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Golf',
            'event' => 'Raiyan vs Marzan',
            'description' => 'Ashia Cup Final Ashia Cup Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/hnRteIPbapvPMZTAsCv30CxcBhcP5D3eacRFEQBE.jpg',
            'featured' => 'Yes',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Tennis',
            'event' => 'Redwan vs Mishfaq',
            'description' => 'Ashia Cup Final Ashia Cup Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/vkbdWy5IzubeQ6MkkVJCB0Jc2x1FxUSoAakkPYXx.jpg',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Boxing',
            'event' => 'Ahsan vs Sumaiya',
            'description' => 'House Cup Round Match',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/fnCd06iG06exlbRIk1kT8KC3bYB4Y0cXcAK4BQpC.jpg',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Basketball',
            'event' => 'Safwan vs Nahian',
            'description' => 'House Cup Semi Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/6TuCxr3MzW0hwiHH2rj0P54fyS6SMLmKB79yOgee.png',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Badminton',
            'event' => 'Marzan vs Redwan',
            'description' => 'A Block Sporting Club Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/eWu0ulsuZis1FsYvsirl3yUSytGo48g6JZh6iBgC.jpg',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Carrom',
            'event' => 'Usman vs Redwan',
            'description' => 'B Block Sporting Club Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/eWu0ulsuZis1FsYvsirl3yUSytGo48g6JZh6iBgC.jpg',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Football',
            'event' => 'Mahfuz vs Tanvir',
            'description' => 'MU Sporting Club Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/WCxYzDALaXbDtlunEAUSCgJCknXp9FeZ05wVeIkO.jpg',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Cricket',
            'event' => 'Navid vs Nihal',
            'description' => 'MU Sporting Club Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/TDnyPW70zvFS9NMpm6JlsALQLnvvTScxBXAYLwtO.png',
            'created_at' => '2021-07-24 01:16:23'
        ]);
        DB::table('events')->insert([
            'category' => 'Cricket',
            'event' => 'Humayun vs Azhar',
            'description' => 'Cousin Sporting Club Final',
            'date' => '2021-07-22',
            'image' => 'http://127.0.0.1:8000/storage/TDnyPW70zvFS9NMpm6JlsALQLnvvTScxBXAYLwtO.png',
            'status' => 'Disable',
            'created_at' => '2021-07-24 01:16:23'
        ]);
    }
}
