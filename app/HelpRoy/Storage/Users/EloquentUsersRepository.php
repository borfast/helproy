<?php

namespace HelpRoy\Storage\Users;

use HelpRoy\Storage\AbstractEloquentRepository;

/**
* Allows interacting with Users.
*
*/
class EloquentUsersRepository extends AbstractEloquentRepository implements UsersRepositoryInterface
{
    /**
     * Constructor
     *
     * @param User $model An instance of the model we'll be operating on.
     */
    public function __construct(User $model)
    {
        $this->model = $model;
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $user = $this->model->create($attributes);

        return $user;
    }
}
