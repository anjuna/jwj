<?php

use Illuminate\Database\Seeder;

use App\Book;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Book::create([
            'name' => 'Anna Karennina',
            'author' => 'Leo Tolstoy'
        ]);

        Book::create([
            'name' => 'Far from the Madding crowd',
            'author' => 'Thomas Hardy'
        ]);
    }
}