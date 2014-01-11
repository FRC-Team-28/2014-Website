<?php

Route::get('/', function()
{
  return View::make('home');
});

Route::get('blog', function()
{
  return View::make('blog')
    ->with('docs', Article::get()->reverse());
});

Route::get('contact-us', function()
{
  return View::make('contact');
});

Route::post('contact-us', function()
{
  var_dump(Input::all());
});

Route::get('sponsors', function()
{
  return View::make('sponsors');
});

Route::group(['before' => 'cache.get', 'after' => 'cache.put'], function()
{

  Route::get('{slug}', function($slug)
  {
      $doc = Article::findSlug($slug);
      $author = $doc->author();
 
      return View::make('article')
        ->with('doc', $doc)
        ->with('author', $author);
  });
 
});

Route::get('cache/clear', function()
{
    Cache::flush();
    return Redirect::to('/');
});




