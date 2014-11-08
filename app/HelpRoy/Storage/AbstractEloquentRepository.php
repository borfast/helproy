<?php

namespace HelpRoy\Storage;

abstract class AbstractEloquentRepository
{
    /**
     * The model instance we will operate on.
     * @var Illuminate\Database\Eloquent\Model;
     */
    protected $model;


    /**
     * Return all models.
     *
     * @return Illuminate\Database\Eloquent\Collection
     */
    public function all()
    {
        return $this->model->all();
    }


    /**
     * Return the specified model instance
     *
     * @param  integer $id  The ID of the model you want to find.
     * @return mixed|null  The specified model instance or null if it doesn't exist.
     */
    public function find($id)
    {
        return $this->model->find($id);
    }


    /**
     * Creates a new instance of the model.
     *
     * @param  array $attributes Model entity attributes.
     * @return Illuminate\Database\Eloquent\Model
     */
    public function create(array $attributes = [])
    {
        $instance = $this->model->create($attributes);

        return $instance;
    }
}
