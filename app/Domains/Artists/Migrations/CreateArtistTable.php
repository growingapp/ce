<?php

namespace App\Domains\Artists\Migrations;

use App\Support\Migration\BaseMigration;
use Illuminate\Database\Schema\Blueprint;

class CreateArtistTable extends BaseMigration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        $this->schema->create('artists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('artistic_name');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        $this->schema->dropIfExists('artists');
    }
}