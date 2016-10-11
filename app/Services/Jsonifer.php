<?php

namespace App\Services;

use Illuminate\Database\Eloquent\Model as ReviewableModel;

class Jsonifer
{
    protected $data;
    private $fileName;

    public function __construct(ReviewableModel $model)
    {
        $this->data = $model::with('reviews')->get();

        $this->fileName = public_path('json/'.$model->getTable().'.json');
    }

    public function output()
    {
        file_put_contents($this->fileName, json_encode($this->data));
    }
}
