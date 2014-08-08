<?php

namespace HelpRoy\Storage\Ads;

/**
* Allows interacting with LostAds.
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
    public function create(array $attributes = [])
    {
        $ad = LostAd::create($attributes);
        return $ad;
    }
}
