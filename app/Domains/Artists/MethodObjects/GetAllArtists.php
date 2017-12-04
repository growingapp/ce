<?php

namespace App\Domains\Artists\MethodObjects;

use App\Domains\Artists\ArtistModel;
use App\Support\MethodObject\MethodObject;

class GetAllArtists extends MethodObject
{
    /**
     * Run the service.
     *
     * @return ArtistModel[]
     */
    public function run()
    {
        return ArtistModel::select([
            'id',
            'artistic_name',
            'created_at',
            'updated_at'
        ])->paginate();
    }
}