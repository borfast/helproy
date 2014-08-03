<?php

class Ad extends \Eloquent {
	protected $fillable = [];

	public function lostAd()
	{
		return $this->hasOne('LostAd');
	}

	public function foundAd()
	{
		return $this->hasOne('FoundAd');
	}

	public function adoptionAd()
	{
		return $this->hasOne('AdoptionAd');
	}
}