<?php

class SiteController extends BaseController {

    public function getIndex()
    {
        return View::make('site.home')
          ->with('docs', Article::get()->reverse());
    }

    public function getAbout()
    {
      return View::make('site.about');
    }
}

