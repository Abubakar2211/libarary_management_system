<?php

namespace Database\Seeders;

use App\Models\Genre;
use App\Models\Book;
use Illuminate\Database\Seeder;
use DB;

class GenreBookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $fiction = Genre::create(['name' => 'Fiction']);
        $thriller = Genre::create(['name' => 'Thriller']);
        $fantasy = Genre::create(['name' => 'Fantasy']);
        $horror = Genre::create(['name' => 'Horror']);
        $mystery = Genre::create(['name' => 'Mystery']);
        $romance = Genre::create(['name' => 'Romance']);

        Book::find(1)->genres()->attach([$fiction->id, $fantasy->id]);
        Book::find(2)->genres()->attach([$thriller->id, $fiction->id, $fantasy->id]);
        Book::find(3)->genres()->attach([$horror->id, $fantasy->id]);
        Book::find(4)->genres()->attach([$fiction->id, $romance->id]);
        Book::find(5)->genres()->attach([$mystery->id, $romance->id]);
        Book::find(6)->genres()->attach([$thriller->id, $horror->id]);
        Book::find(7)->genres()->attach([$fantasy->id, $romance->id]);
        Book::find(8)->genres()->attach([$fiction->id, $thriller->id]);
        Book::find(9)->genres()->attach([$mystery->id, $horror->id]);
        Book::find(10)->genres()->attach([$romance->id, $fantasy->id, $thriller->id]);
    }
}
