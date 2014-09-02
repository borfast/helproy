<?php

namespace HelpRoy\Storage\Animals;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentAnimalsRepository extends AbstractEloquentRepository implements AnimalsRepositoryInterface
{
    /**
     * Constructor
     *
     * @param Animal $model An instance of the model we'll be operating on.
     */
    public function __construct(Animal $model)
    {
        $this->model = $model;
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $animal_type = $this->model->create($attributes);

        return $animal_type;
    }
}
