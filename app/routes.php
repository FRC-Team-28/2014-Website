<?php


// Frontend Routes
Route::get('/', 'SiteController@getIndex');

Route::get('{slug}', function($slug)
{
    $doc = Document::findSlug($slug);

   return View::make('test')
     ->with('doc', $doc);
});

Route::get('/authors', function()
{
    return View::make('test')
        ->with('auths', Author::get());
});
