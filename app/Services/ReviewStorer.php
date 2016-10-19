<?php

namespace App\Services;

use Auth;
use Carbon\Carbon;
use App\Review; use App\Reviewable; use App\Type;

class ReviewStorer
{
    public $input;

    private $type;
    private $reviewable;

    public static function make($input)
    {
        $instance = new static;

        $instance->input = $input;

        $instance->handle();
    }

    public function handle()
    {
        $this->checkForNewType();

        $this->checkForNewReviewable();

        $this->writeReview();
    }

    private function checkForNewType()
    {
        if ($this->input['new_type']) {
            $this->type = Type::create([
                'name' => $this->input['new_type']
            ]);

            return;
        }

        $this->type = Type::find($this->input['type']);
    }

    private function checkForNewReviewable()
    {
        if ($this->input['new_reviewable']) {
            $this->reviewable = Reviewable::create([
                'title' => $this->input['new_reviewable'],
                'creator' => 'test',
                'year_made' => Carbon::now(),
                'type_id' => $this->type->id
            ]);

            return;
        }

        $this->reviewable = Reviewable::find($this->input['reviewable']);
    }

    private function writeReview()
    {
        Review::create([
            'user_id' => Auth::user()->id,
            'reviewable_id' => $this->reviewable->id,
            'body' => $this->input['body']
        ]);
    }
}
