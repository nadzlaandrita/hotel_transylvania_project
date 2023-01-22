<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryRoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('category_rooms')->insert([

            [
                //1
                'category_name' => 'Regular',
                'available' => 5
            ],

            [
                //2
                'category_name' => 'Luxury',
                'available' => 5
            ],

            [
                //3
                'category_name' => 'Penthouse',
                'available' => 5
            ]
        ]);
    }
}
