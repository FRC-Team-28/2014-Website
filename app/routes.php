<?php

Route::group(['before' => 'cache.get', 'after' => 'cache.put'], function()
{

    Route::get('/', 'SiteController@getIndex');

    Route::get('{slug}', function($slug)
    {
        $doc = Article::findSlug($slug);
        $author = $doc->author();

        return View::make('site.article')
            ->with('doc', $doc)
            ->with('author', $author);
    });

});

Route::get('cache/clear', function()
{
    Cache::flush();
    return Redirect::to('/');
});




