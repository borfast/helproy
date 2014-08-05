<?php
namespace HelpRoy\Storage\Users;

/**
* Allows interacting with Users.
*
*/
class EloquentUsersRepository implements UsersRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return User::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return User::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $attributes)
    {
        $user = User::create($attributes);
        
        return $user;
    }
}
