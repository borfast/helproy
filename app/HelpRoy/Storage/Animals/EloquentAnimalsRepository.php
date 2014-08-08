<?php
namespace HelpRoy\Storage\Animals;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentAnimalsRepository implements AnimalsRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return Animal::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return Animal::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $animal_type = Animal::create($attributes);
        return $animal_type;
    }
}
