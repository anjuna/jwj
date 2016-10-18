<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    public $guarded = ['id'];

    public $touches = ['reviewable'];

    public function reviewable()
    {
        return $this->belongsTo(Reviewable::class);
    }
}
