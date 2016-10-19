<?php

use Illuminate\Database\Seeder;

use App\Type; use App\Reviewable; use App\Review; use Carbon\Carbon;

class ReviewBeast extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->setUpReviewables();

        $this->writeSomeReviews();
    }

    protected function setUpReviewables()
    {
        $books = Type::create([
            'name' => 'book'
        ]);

        $films = Type::create([
            'name' => 'film'
        ]);

        $pieces = Type::create([
            'name' => 'musical_piece'
        ]);

        $books->reviewables()->save(
            new Reviewable([
                'title' => 'Anna Karenina',
                'creator' => 'Leo Tolstoy',
                'year_made' => Carbon::now()
            ])
        );

        $books->reviewables()->save(
            new Reviewable([
                'title' => 'Far from the Madding crowd',
                'creator' => 'Thomas Hardy',
                'year_made' => Carbon::now()
            ])
        );

        $films->reviewables()->save(
            new Reviewable([
                'title' => 'The Martian',
                'creator' => 'Ridley Scott',
                'year_made' => Carbon::now()
            ])
        );

        $pieces->reviewables()->save(
            new Reviewable([
                'title' => 'Sonatina',
                'creator' => 'Maurice Ravel',
                'year_made' => Carbon::now()
            ])
        );
    }

    protected function writeSomeReviews()
    {
        $anna = Reviewable::where('title', 'Anna Karenina')->first();

        $anna->reviews()->save(
            new Review([
                'user_id' => '1',
                'body' => 'Awesome book, feels like you live several lives'
            ])
        );

        $martian = Reviewable::where('title', 'The Martian')->first();

        $martian->reviews()->save(
            new Review([
                'user_id' => '1',
                'body' => 'Pleasant foray into a scientists somewhat whimsical escape of the red planet'
            ])
        );

        $madding = Reviewable::where('title', 'Far from the Madding crowd')->first();

        $madding->reviews()->save(
            new Review([
                'user_id' => '1',
                'body' => 'Painful love-quadrangle set in beautiful countryside'
            ])
        );

        $sonatina = Reviewable::where('title', 'Sonatina')->first();

        $sonatina->reviews()->save(
            new Review([
                'user_id' => '1',
                'body' => 'Hauntingly beautiful'
            ])
        );
    }
}
