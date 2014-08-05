<?php
namespace HelpRoy\Storage\AnimalTypes;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentFoundAdsRepository implements FoundAdsRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return FoundAd::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return FoundAd::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create($attributes)
    {
        $animal_type = FoundAd::create($attributes);
        return $animal_type;
    }
}
