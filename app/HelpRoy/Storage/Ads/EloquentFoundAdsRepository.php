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
}
