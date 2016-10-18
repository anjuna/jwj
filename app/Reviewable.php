<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reviewable extends Model
{
    public $guarded = ['id'];

    public $touches = ['type'];

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }
}
