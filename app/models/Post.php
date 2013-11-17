<?php

class Post extends Eloquent {

	protected $table = "posts";

	public function comments() {
		return $this->hasMany('Comment');
	}
}