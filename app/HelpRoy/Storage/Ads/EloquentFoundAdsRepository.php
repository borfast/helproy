<?php

namespace HelpRoy\Storage\Ads;

/**
* Allows interacting with FoundAds.
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
    public function create(array $attributes = [])
    {
        $ad = FoundAd::create($attributes);
        return $ad;
    }
}
