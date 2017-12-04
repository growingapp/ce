<?php

namespace App\Support\Repositories;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\Query\Builder;

abstract class DbRepository
{
    /**
     * @var Builder
     */
    protected $model;

    /**
     * @param $id
     * @param array $columns
     * @return mixed|static
     */
    public function getById($id, $columns = ['*'])
    {
        if (! $model = $this->model->select($columns)->find($id)) {
            throw new ModelNotFoundException("Model " . __CLASS__ . " not found");
        }

        return $model;
    }
}
