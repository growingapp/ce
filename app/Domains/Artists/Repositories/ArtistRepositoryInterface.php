<?php

namespace App\Domains\Artists\Repositories;

interface ArtistRepositoryInterface
{
    public function getAll();
    public function findById($id, $columns = ['*']);
}
