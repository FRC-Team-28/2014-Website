<?php

// Admin Routes


//File Upload Routes
Route::get('upload/data', 'UploadController@data');

Route::resource( 'upload', 'UploadController', array(
  'except' => array('show', 'edit', 'update', 'destroy')));

// Frontend Routes
Route::get('/', 'SiteController@getIndex');
