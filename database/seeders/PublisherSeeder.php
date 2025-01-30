<?php

namespace Database\Seeders;

use DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PublisherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('publishers')->insert([
            ['name' => 'Penguin Random House'],
            ['name' => 'HarperCollins'],
            ['name' => 'Simon & Schuster'],
            ['name' => 'Hachette Livre'],
        ]);
    }
}
