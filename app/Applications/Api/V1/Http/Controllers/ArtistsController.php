<?php

namespace App\Applications\Api\V1\Http\Controllers;

use App\Domains\Artists\Repositories\DbArtistRepository;
use App\Domains\Artists\Transformers\ArtistTransformer;

class ArtistsController extends BaseController
{
    public function index(DbArtistRepository $artistRepository)
    {
        return $this->response->collection($artistRepository->getAll(), new ArtistTransformer);
    }
}