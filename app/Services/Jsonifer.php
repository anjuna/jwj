<?php

namespace App\Services;

use App\Type;

class Jsonifer
{
    protected $data;
    private $fileName;

    /**
     * Set the data and the file name for the outputted json
     * @param ReviewableModel $model
     */
    public function __construct(Type $type)
    {
        $this->data = $type->reviewables()->with('reviews')->get();;

        $this->fileName = public_path('json/'.$type->name.'.json');
    }

    public function output()
    {
        file_put_contents($this->fileName, json_encode($this->data));
    }
}
