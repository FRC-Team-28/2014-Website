<?php


// Frontend Routes
Route::get('/', 'SiteController@getIndex');

Route::get('{slug}', function($slug)
{
    $doc = Article::findSlug($slug);
    $author = $doc->author();

   return View::make('site.article')
     ->with('doc', $doc)
     ->with('author', $author);
});
