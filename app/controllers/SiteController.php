<?php

class SiteController extends BaseController {

    public function getIndex()
    {
      $data = array();
      $data['title'] = "Front Page";
      $data['articles'] = Article::take(3)->get();
      return View::make('site.home')->with('data', $data);
    }

    public function getAbout()
    {
      return View::make('site.about');
    }
}
?>

