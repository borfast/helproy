<?php

namespace HelpRoy\Storage\Animals;

class Animal extends \Eloquent {
	protected $fillable = [
		"animal_type_id",
        "age",
        "color_1",
        "color_2",
        "size",
        "description"
    ];

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