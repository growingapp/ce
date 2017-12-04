<?php

namespace App\Domains\Artists\Providers;

use App\Domains\Artists\Migrations\CreateArtistTable;
use Migrator\MigrationServiceProvider;
use Migrator\MigratorTrait;

class ArtistMigrationsServiceProvider extends MigrationServiceProvider
{
    use MigratorTrait;

    public function register()
    {
        $this->migrations([
            CreateArtistTable::class,
        ]);
    }
}