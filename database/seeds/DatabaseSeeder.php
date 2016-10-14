<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->makeThingsToBeReviewed();
        $this->makeReviews();

        $this->call(UserSeed::class);
    }

    protected function makeThingsToBeReviewed()
    {
        $this->call(BooksTableSeeder::class);
        $this->call(FilmsTableSeeder::class);
        $this->call(MusicPiecesTableSeeder::class);

    }

    protected function makeReviews()
    {
        $this->call(ReviewsTableSeeder::class);
    }
}
