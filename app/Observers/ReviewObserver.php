<?php

namespace App\Observers;

use App\Services\Jsonifer;
use App\Review;

class ReviewObserver
{
    public function saved(Review $review)
    {
        $this->updateStaticFile($review->reviewable);

    }

    public function updated(Review $review)
    {
        $this->updateStaticFile($review->reviewable);
    }

    protected function updateStaticFile($model)
    {
        $handle = new Jsonifer($model);
        $handle->output();
    }
}
