<?php
namespace HelpRoy\Storage\AnimalTypes;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentAnimalTypesRepository implements AnimalTypesRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return AnimalType::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return AnimalType::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create($name)
    {
        $animal_type = AnimalType::create(['name' => $name]);
        return $animal_type;
    }
}
