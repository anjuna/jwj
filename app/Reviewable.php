<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewable extends Model
{
    public $guarded = ['id'];

    public $timestamps = false;

    public function reviews()
    {
        return $this->belongsToMany(Review::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
