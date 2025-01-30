<?php

namespace Database\Seeders;

use DB;
use Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Abubakar',
                'email' => 'Abubakar192005@gmail.com',
                'password' => Hash::make('Abubakar123@')
            ],
            [
                'name' => 'Hasan',
                'email' => 'Hasan@gmail.com',
                'password' => Hash::make('Hasan@')
            ],
            [
                'name' => 'khurram',
                'email' => 'Khurram@gmail.com',
                'password' => Hash::make('khurram123@')
            ],
        ]);
    }
}
