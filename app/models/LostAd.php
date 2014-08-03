<?php

class LostAd extends \Eloquent {
	protected $fillable = [];

	public function ad()
	{
		return $this->belongsTo('Ad');
	}
}