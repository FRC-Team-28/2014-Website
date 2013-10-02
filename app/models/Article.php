<?php

use Felixkiss\SlugRoutes\SluggableInterface;

class Article extends Eloquent implements SluggableInterface
{

	protected $guarded = array();

	public static $rules = array();

	public function author()
	{
		$this->belongsTo('User', 'author_id');
	}

	public function setTitleAttribute($title)
	{
		$this->attributes['title'] = $title;
	}

	protected function generateSlug()
	{
		$slug = $this->id.' '.$this->title;
		$this->attributes['slug'] = Str::slug($slug);
	}

	public function getSlugIdentifier()
    {
        return 'slug';
    }

}
