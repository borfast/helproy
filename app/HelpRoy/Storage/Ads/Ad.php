<?php

namespace HelpRoy\Storage\Ads;

class Ad extends \Eloquent {
	protected $fillable = [];

	/**
	 * Allows access to the data associated with the lost ad.
	 * 			
	 * @return Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function lostAd()
	{
		return $this->hasOne('LostAd');
	}

	/**
	 * Allows access to the data associated with the found ad.
	 * 			
	 * @return Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function foundAd()
	{
		return $this->hasOne('FoundAd');
	}

	/**
	 * Allows access to the data associated with the adoption ad.
	 * 			
	 * @return Illuminate\Database\Eloquent\Relations\HasOne
	 */
	public function adoptionAd()
	{
		return $this->hasOne('AdoptionAd');
	}
}