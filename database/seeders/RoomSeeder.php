<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('rooms')->insert([

            [
                'category_id' => 1,
                'name' => 'Wayne Room',
                'desc' => 'A regular room with one king size bed',
                'price' => 850000,
                'image' => 'images\reguler\1.jpg'
            ],

            [
                'category_id' => 2,
                'name' => 'Mavis Room',
                'desc' => 'A luxury room with one king size bed',
                'price' => 2000000,
                'image' => 'images\Luxury\1.jpg'
            ],

            [
                'category_id' => 3,
                'name' => 'Dracula Room',
                'desc' => 'Feel your luxury in an amazing Penthouse',
                'price' => 8000000,
                'image' => 'images\penthouse\1.jpg'
            ]
        ]);
    }
}
