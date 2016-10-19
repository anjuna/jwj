<?php

namespace App\Observers;

use App\Services\Jsonifer;
use App\Type;

class ExportReviewDataOfType
{
    /**
     * Hook into reviews being updated
     * @param  Type $type
     * @return void
     */
    public function saved(Type $type)
    {
        $handle = new Jsonifer($type);
        $handle->output();
    }
}
