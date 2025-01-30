<?php

namespace Database\Seeders;

use App\Models\Author;
use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('books')->insert([
            ['title' => 'Harry Potter and the Sorcerer\'s Stone', 'author_id' => 1],
            ['title' => 'Harry Potter and the Chamber of Secrets', 'author_id' => 1],
            ['title' => 'The Da Vinci Code', 'author_id' => 1],

            ['title' => 'A Game of Thrones', 'author_id' => 2],
            ['title' => 'A Clash of Kings', 'author_id' => 2],
            ['title' => 'The Hobbit', 'author_id' => 2],

            ['title' => 'The Lord of the Rings', 'author_id' => 3],
            ['title' => 'Angels & Demons', 'author_id' => 3],

            ['title' => 'The Shining', 'author_id' => 4],
            ['title' => 'It', 'author_id' => 4],
            ['title' => 'Murder on the Orient Express', 'author_id' => 4],
            ['title' => 'And Then There Were None', 'author_id' => 4],

        ]);
    }
}
