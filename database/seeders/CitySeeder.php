<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->insert([
            [
                'city_id' => 1,
                'name' => 'Tokyo',
                'prefecture' => 'Tokyo',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 2,
                'name' => 'Yokohama',
                'prefecture' => 'Kanagawa',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 3,
                'name' => 'Osaka',
                'prefecture' => 'Osaka',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 4,
                'name' => 'Nagoya',
                'prefecture' => 'Aichi',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 5,
                'name' => 'Sapporo',
                'prefecture' => 'Hokkaido',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 6,
                'name' => 'Fukuoka',
                'prefecture' => 'Fukuoka',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 7,
                'name' => 'Kobe',
                'prefecture' => 'Hyogo',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 8,
                'name' => 'Kyoto',
                'prefecture' => 'Kyoto',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 9,
                'name' => 'Saitama',
                'prefecture' => 'Saitama',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 10,
                'name' => 'Chiba',
                'prefecture' => 'Chiba',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 11,
                'name' => 'Sendai',
                'prefecture' => 'Miyagi',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 12,
                'name' => 'Kawasaki',
                'prefecture' => 'Kanagawa',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 13,
                'name' => 'Saitama',
                'prefecture' => 'Saitama',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 14,
                'name' => 'Kumamoto',
                'prefecture' => 'Kumamoto',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'city_id' => 15,
                'name' => 'Nara',
                'prefecture' => 'Nara',
                'picture' => 'tokyo.jpg',
                'picture_description' => 'Skyline of Tokyo',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
