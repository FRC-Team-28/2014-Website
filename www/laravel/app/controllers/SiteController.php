<?php

class SiteController extends BaseController {


	public function __construct()
	{
		$this->beforeFilter('csrf', array('on' => 'post'));
	}
    public function getIndex()
    {
        return View::make('home');
    }

    public function getBlog()
    {
    	return View::make('blog')
          ->with('docs', Article::get()->reverse());
    }

    public function getSponsors()
    {
    	return View::make('sponsors');
    }

    public function getAbout()
    {
      return View::make('about');
    }

    public function getContactUs()
    {
    	return View::make('contact');
    }

    public function postContactUs()
    {
		var_dump(Input::all());
    }

}

