<?php

/**
 * Theme routes.
 *
 * The routes defined inside your theme override any similar routes
 * defined on the application global scope.
 */

Route::get('template', ['home', 'uses' => 'HomeController@index']);
Route::get('singular', ['islands', 'uses' => 'IslandController@index']);
Route::get('singular', ['modpack', 'uses' => 'ModpackController@index']);

Route::get('page', ['uses' => 'TemplateController@index']);
Route::get('404', ['404', 'uses' => 'ErrorController@index']);
