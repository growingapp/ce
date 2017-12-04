<?php

namespace App\Domains\Artists\Transformers;

use App\Support\Transformers\TransformableContract;

class ArtistTransformer implements TransformableContract
{
    /**
     * @param $model
     * @return array
     */
    public function transform($model)
    {
        return [
            'id' => $model->id,
            'artistic_name' => $model->artistic_name,
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
