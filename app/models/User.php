<?php

class User extends Eloquent implements
{

	protected $table = 'users';

	protected $hidden = array('password');

	public function articles()
	{
		$this->hasMany('Article');
	}
}
