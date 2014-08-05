<?php

namespace HelpRoy\Storage\Contacts;

/**
 * Allows access and manipulation of contact entities.
 */
interface ContactsRepositoryInterface
{
	/**
	 * Returns an individual contact based on id.
	 *
	 * @param  int $id The id of the desired contact.
	 * @return HelpRoy\Storage\Contacts\Contact
	 */
	public function find($id);

	/**
	 * Retrivies all contacts.
	 *
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new contact.
	 *
	 * @param  array $attributes Contact entity attributes.
	 * @return HelpRoy\Storage\Contacts\Contact
	 */
	public function create(array $attributes = []);
}