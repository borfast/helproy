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
    public function create($name)
    {
        $animal_type = Animal::create(['name' => $name]);
        return $animal_type;
    }
}
