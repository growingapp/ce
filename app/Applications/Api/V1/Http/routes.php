<?php

Route::get('/artists', ['as' => 'artists', 'uses' => 'ArtistsController@index']);
Route::get('/test', function () {
    \Log::info(print_r($_SERVER, true));
    echo "ok";
});