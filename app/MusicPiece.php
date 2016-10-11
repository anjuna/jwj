<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MusicPiece extends Model
{
    public $timestamps = false;

    public function reviews()
    {
        $this->morphMany(Review::class, 'reviewable');
    }

    public function addReview(Review $review)
    {
        $this->reviews()->save($review);
    }
}
