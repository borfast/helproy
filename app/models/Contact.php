<?php

class Contact extends \Eloquent {
	protected $fillable = [];

	public function user()
	{
		return $this->belongsTo('User');
	}
}