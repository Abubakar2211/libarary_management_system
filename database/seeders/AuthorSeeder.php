<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AuthorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('authors')->insert([
            ['name' => 'J.K. Rowling'],
            ['name' => 'George R.R. Martin'],
            ['name' => 'J.R.R. Tolkien'],
            ['name' => 'Stephen King'],
        ]);
    }
}
