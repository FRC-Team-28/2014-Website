<?php

Route::get('{slug}', array('before' => 'cache.get', 'after' => 'cache.put', function($slug)
{
    $doc = Article::findSlug($slug);
    $author = $doc->author();

    return View::make('site.article')
        ->with('doc', $doc)
        ->with('author', $author);
}));

Route::controller('/', 'SiteController');

Route::get('cache/clear', function()
{
    Cache::flush();
    return Redirect::to('/');
});




