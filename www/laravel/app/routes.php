<?php

Route::get('/', function()
{
  return View::make('home');
});

Route::get('blog', function()
{
  return View::make('blog')
    ->with('docs', Article::get());
});

Route::get('contact-us', function()
{
  return View::make('contact');
});

Route::post('contact-us', function()
{
  
  $rules = array(
    'email'                    => 'email|required',
    'body'                     => 'required',
    'name'                     => 'required',
    'subject'                  => 'required',
    'recaptcha_response_field' => 'required|recaptcha',
  );

  $v = Validator::make(Input::all(), $rules);

  if($v->passes()) {
    Mail::send('email.contact', array('name' => Input::get('name'), 'body' => Input::get('body')), function($message)
    {
      $message->to("cschulman@sagharborschools.org")->from(Input::get('email'), Input::get('name'))->subject(Input::get('subject'));
    });
    return Redirect::to('contact-us')->with('success', true); 
  } else {
    return Redirect::to('contact-us')->with('success', false)->withErrors($v)->withInput();
  }

});

Route::get('sponsors', function()
{
  return View::make('sponsors');
});

Route::get('about', function()
{
  return View::make('about');
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




