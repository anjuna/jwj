<?php

use Illuminate\Database\Seeder;

use App\Review; use App\Film; use App\MusicPiece; use App\Book;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->addFilmReviews();
        $this->addMusicPieceReviews();
        $this->addBookReviews();
    }

    protected function addFilmReviews()
    {
        # code...
    }

    protected function addMusicPieceReviews()
    {
        # code...
    }

    protected function addBookReviews()
    {
        $anna = Book::where('name', 'Anna Karennina');

        $anna->addReview(
            Review::create([
                'body' => 'Awesome book, feel like you live several lives'
            ])
        );
    }
}
