<?php
namespace HelpRoy\Storage\AnimalTypes;

/**
* Allows interacting with AnimalTypes.
*
*/
class EloquentLostAdsRepository implements LostAdsRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return LostAd::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return LostAd::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create($attributes)
    {
        $ad = LostAd::create($attributes);
        return $ad;
    }
}
