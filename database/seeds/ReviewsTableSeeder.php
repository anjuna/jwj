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
        $film = Film::where('name', 'The Martian')->first();

        $film->addReview(
            new Review([
                'body' => 'Pleasant foray into a scientists somewhat whimsical escape of the red planet'
            ])
        );
    }

    protected function addMusicPieceReviews()
    {
        $piece = MusicPiece::where('name', 'Sonatina')->first();

        $piece->addReview(
            new Review([
                'body' => 'Haunting and expressive, ravellian chords galore in this beauty of a piece'
            ])
        );
    }

    protected function addBookReviews()
    {
        $anna = Book::where('name', 'Anna Karennina')->first();

        $annaReview = new Review([
            'body' => 'Awesome book, feels like you live several lives'
        ]);

        $anna->addReview($annaReview);

        $madding = Book::where('name', 'Far from the Madding crowd')->first();

        $madding->addReview(
            new Review([
                'body' => 'Painful love-quadrangle set in beautiful countryside'
            ])
        );
    }
}
