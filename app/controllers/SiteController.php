<?php

class SiteController extends BaseController {

    public function getIndex()
    {
        // $docs = Document::collection('articles')->get();

        return View::make('site.home')
          ->with('docs', Document::get());
    }

    public function getAbout()
    {
      return View::make('site.about');
    }
}
?>

