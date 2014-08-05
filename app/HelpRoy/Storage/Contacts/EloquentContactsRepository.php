<?php
namespace HelpRoy\Storage\Contacts;

/**
* Allows interacting with Contacts.
*
*/
class EloquentContactsRepository implements ContactsRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return Contacts::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return Contacts::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $contact = Contacts::create($attributes);
        return $contact;
    }
}
