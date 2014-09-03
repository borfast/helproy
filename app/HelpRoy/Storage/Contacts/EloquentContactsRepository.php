<?php

namespace HelpRoy\Storage\Contacts;

use HelpRoy\Storage\AbstractEloquentRepository;

/**
* Allows interacting with Contacts.
*
*/
class EloquentContactsRepository extends AbstractEloquentRepository implements ContactsRepositoryInterface
{
    /**
     * Constructor
     *
     * @param Contact $model An instance of the model we'll be operating on.
     */
    public function __construct(Contact $model)
    {
        $this->model = $model;
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $contact = $this->model->create($attributes);

        return $contact;
    }
}
