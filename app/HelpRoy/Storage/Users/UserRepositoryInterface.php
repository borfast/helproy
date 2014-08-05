<?php

namespace HelpRoy\Storage\Users;

/**
 * Allows access and manipulation of user entities.
 */
interface UserRepositoryInterface
{	
	/**
	 * Returns an individual user based on id.
	 * 
	 * @param  int $id The id of the desired user.
	 * @return HelpRoy\Storage\Users\User
	 */
	public function find($id);

	/**
	 * Retrivies all users.
	 * 
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new user.
	 * 
	 * @param  array $attributes User entity attributes.
	 * @return HelpRoy\Storage\Users\User
	 */
	public function create(array $attributes = []);
}