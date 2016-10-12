<?php

namespace App;

use \Illuminate\Database\Eloquent\Relations\MorphMany;

interface Reviewable
{
    /**
     * Specify the morphMany relationship on things that can be reviewed
     * @return [type] [description]
     */
    public function reviews();
}
