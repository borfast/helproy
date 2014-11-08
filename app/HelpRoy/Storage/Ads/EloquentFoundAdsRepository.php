<?php

namespace HelpRoy\Storage\Ads;

use HelpRoy\Storage\AbstractEloquentRepository;

/**
* Allows interacting with FoundAds.
*
*/
class EloquentFoundAdsRepository extends AbstractEloquentRepository implements FoundAdsRepositoryInterface
{
    /**
     * Constructor
     *
     * @param FoundAd $model An instance of the model we'll be operating on.
     */
    public function __construct(FoundAd $model)
    {
        $this->model = $model;
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $parent_ad = $this->ads->create($attributes);
        $attributes['ad_id'] = $parent_ad->id;
        $found_ad = $this->model->create($attributes);

        return $found_ad;
    }
}
