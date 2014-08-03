<?php

class Animal extends \Eloquent {
	protected $fillable = [];

	public function animalType()
	{
		return $this->belongsTo('AnimalType');
	}
}