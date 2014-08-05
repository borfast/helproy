<?php

namespace HelpRoy\Storage\AnimalTypes;

/**
 * Allows access and manipulation of animal type entities.
 */
interface AnimalTypesRepositoryInterface
{	
	/**
	 * Returns an individual animal type based on id.
	 * 
	 * @param  int $id The id of the desired animal type.
	 * @return HelpRoy\Storage\AnimalTypes\AnimalType
	 */
	public function find($id);

	/**
	 * Retrivies all animal types.
	 * 
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new animal type.
	 * 
	 * @param  string $name The name of the new animal type.
	 * @return HelpRoy\Storage\AnimalTypes\AnimalType
	 */
	public function create($name);
}