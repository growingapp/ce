<?php

namespace App\Support\Transformers;

interface TransformableContract
{
    /**
     * transform model into item collection.
     *
     * @param $collection
     * @return array
     */
    public function transform($collection);
}
