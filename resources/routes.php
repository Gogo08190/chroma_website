<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

Route::get('template', ['home', 'uses' => 'HomeController@index']);
Route::get('singular', ['modpack', 'uses' => 'ModpackController@index']);
