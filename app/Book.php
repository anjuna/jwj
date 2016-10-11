<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public $timestamps = false;
    public $guarded = ['id'];

    public function reviews()
    {
        return $this->morphMany('App\Review', 'reviewable');
    }

    public function addReview(Review $review)
    {
        return $this->reviews()->save($review);
    }
}
