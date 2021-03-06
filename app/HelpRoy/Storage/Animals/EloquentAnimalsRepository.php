<?php

namespace HelpRoy\Storage\Animals;

use HelpRoy\Storage\AbstractEloquentRepository;

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
}
