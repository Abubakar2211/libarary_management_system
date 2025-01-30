<?php

namespace Database\Seeders;

use App\Models\User;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('profiles')->insert([
            [
                'user_id' => User::find('1')->id,
                'bio' => 'Software Engineer',
                'avatar' => 'abubakar.png',
                'phone_number' => '03320520766'
            ],
            [
                'user_id' => User::find('2')->id,
                'bio' => 'Frontend Developer',
                'avatar' => 'hasan.png',
                'phone_number' => '03320854712'
            ],
            [
                'user_id' => User::find('3')->id,
                'bio' => 'Mobile Developer',
                'avatar' => 'khurram.png',
                'phone_number' => '03320965412'
            ]
        ]);
    }
}
