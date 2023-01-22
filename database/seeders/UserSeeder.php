<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([

            [
                'role' => 'admin',
                'email' => 'admin@gmail.com',
                'username' => 'admin',
                'password' => bcrypt('admin'),
                'phone_number' => '021321231',
                'address' => 'jl. flaminggo no 7'
            ],

            [
                'role' => 'member',
                'email' => 'nadzla@gmail.com',
                'username' => 'nadzla',
                'password' => bcrypt('baskom123'),
                'phone_number' => '081145567',
                'address' => 'jl. buana no 12'
            ]
        ]);
    }
}
