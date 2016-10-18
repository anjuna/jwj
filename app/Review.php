<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $guarded = ['id'];

    public function reviewable()
    {
        return $this->belongsToMany(Reviewable::class);
    }
}
