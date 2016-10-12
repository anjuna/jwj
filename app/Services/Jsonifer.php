<?php

namespace App\Services;

use App\Reviewable;

class Jsonifer
{
    protected $data;
    private $fileName;

    /**
     * Set the data and the file name for the outputted json
     * @param ReviewableModel $model
     */
    public function __construct(Reviewable $model)
    {
        $this->data = $model::with('reviews')->get();

        $this->fileName = public_path('json/'.$model->getTable().'.json');
    }

    public function output()
    {
        file_put_contents($this->fileName, json_encode($this->data));
    }
}
