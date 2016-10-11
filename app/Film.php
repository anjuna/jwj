<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    public $timestamps = false;
    public $guarded = ['id'];

    public function reviews()
    {
        return $this->morphMany(Review::class, 'reviewable');
    }

    public function addReview(Review $review)
    {
        return $this->reviews()->save($review);
    }
}
