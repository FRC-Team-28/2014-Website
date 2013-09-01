<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
    return "Hello World.";
});

// Adding auth checks for the upload functionality is highly recommended.

// Cabinet routes
Route::get('upload/data', 'UploadController@data');
Route::resource( 'upload', 'UploadController', array(
    'except' => array('show', 'edit', 'update', 'destroy')));