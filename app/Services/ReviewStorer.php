<?php

namespace App\Services;

use App\Review;

class ReviewStorer
{
    public $input;

    public static function make($input)
    {
        $instance = new static;

        $instance->input = $input;

        $instance->handle();
    }

    public function handle()
    {
        dd($this->input);

        Review::create([
            'user_id' => Auth::user()->id,
            'reviewable_id' => $request->reviewable,
            'body' => $request->body
        ]);
    }
}
