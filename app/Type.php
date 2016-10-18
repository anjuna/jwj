<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    public $timestamps = false;

    public $guarded = [
        'id'
    ];

    public function reviewables()
    {
        return $this->hasMany(Reviewable::class);
    }
}
