<?php

namespace HelpRoy\Storage\Animals;

/**
 * Allows access and manipulation of animal entities.
 */
interface AnimalsRepositoryInterface
{
    /**
     * Returns an individual animal based on id.
     *
     * @param  int $id The id of the desired animal.
     * @return HelpRoy\Storage\Animals\Animal
     */
    public function find($id);

    /**
     * Retrivies all animals.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all();

    /**
     * Creates a new animal.
     *
     * @param  array $attributes Animal entity attributes.
     * @return HelpRoy\Storage\Animals\Animal
     */
    public function create(array $attributes = []);
}
