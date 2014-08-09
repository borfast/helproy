<?php

namespace HelpRoy\Storage\AnimalTypes;

class AnimalType extends \Eloquent {
	protected $fillable = ["name"];

	/**
	 * Allows access to the animals related to this animal type.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function animals()
	{
		return $this->hasMany('Animal');
	}
}