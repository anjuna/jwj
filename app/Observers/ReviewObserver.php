<?php

namespace App\Observers;

use App\Services\Jsonifer;
use App\Review;

class ReviewObserver
{
    /**
     * Hook into new reviews being created
     * @param  Review $review
     * @return void
     */
    public function saved(Review $review)
    {
        $this->updateStaticFile($review->reviewable);
    }

    /**
     * Hook into reviews being updated
     * @param  Review $review
     * @return void
     */
    public function updated(Review $review)
    {
        $this->updateStaticFile($review->reviewable);
    }

    /**
     * Update the file
     * @param  Reviewable
     * @return void
     */
    protected function updateStaticFile($model)
    {
        $handle = new Jsonifer($model);
        $handle->output();
    }
}
