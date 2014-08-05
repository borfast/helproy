<?php

namespace HelpRoy\Storage\Animals;

class Animal extends \Eloquent {
	protected $fillable = [];

	/**
	 * Allows access to the animal type which this animal belongs to.
	 * 
	 * @return Illuminate\Database\Eloquent\Relations\BelongsTo
	 */
	public function animalType()
	{
		return $this->belongsTo('AnimalType');
	}
}