<?php

namespace HelpRoy\Storage\Ads;

use HelpRoy\Storage\AbstractEloquentRepository;

/**
* Allows interacting with LostAds.
*
*/
class EloquentLostAdsRepository extends AbstractEloquentRepository implements LostAdsRepositoryInterface
{
    /**
     * Constructor
     *
     * @param LostAd $model An instance of the model we'll be operating on.
     */
    public function __construct(LostAd $model)
    {
        $this->model = $model;
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $ad = $this->model->create($attributes);

        return $ad;
    }
}
