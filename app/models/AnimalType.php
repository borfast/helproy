<?php

class AnimalType extends \Eloquent {
	protected $fillable = [];

	public function animals()
	{
		return $this->hasMany('Animal');
	}
}