<?php

namespace App\Domains\Artists;

use Illuminate\Database\Eloquent\Model;

class ArtistModel extends Model
{
    public $table = 'artists';

    public $dates = ['created_at', 'updated_at', 'deleted_at'];
}