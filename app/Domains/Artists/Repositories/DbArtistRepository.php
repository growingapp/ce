<?php

namespace App\Domains\Artists\Repositories;

use App\Domains\Artists\ArtistModel;
use App\Domains\Artists\MethodObjects\GetAllArtists;
use App\Support\Repositories\DbRepository;

class DbArtistRepository extends DbRepository implements ArtistRepositoryInterface
{
    /**
     * @var ArtistModel
     */
    protected $model;

    /**
     * DbArtistRepository constructor.
     *
     * @param ArtistModel $model
     */
    public function __construct(ArtistModel $model)
    {
        $this->model = $model;
    }

    /**
     * @return \App\Domains\Artists\ArtistModel[]
     */
    public function getAll()
    {
        return (new GetAllArtists())->run();
    }

    public function findById($id, $columns = ['*'])
    {
        return $this->model->whereId($id)->first();
    }
}
