<?php

class User extends Eloquent
{

	protected $table = 'users';

	protected $hidden = array('password');

	public function articles()
	{
		return $this->hasMany('Article');
	}
}
