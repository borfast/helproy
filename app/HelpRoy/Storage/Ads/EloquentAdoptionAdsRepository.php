<?php

namespace HelpRoy\Storage\Ads;

/**
* Allows interacting with AdoptionAds.
*
*/
class EloquentAdoptionAdsRepository extends AbstractEloquentRepository implements AdoptionAdsRepositoryInterface
{
    /**
     * The Ads repository we'll use.
     *
     * @var AdsRepositoryInterface
     */
    protected $ads;


    /**
     * Constructor
     *
     * @param AdoptionAd $model An instance of the model we'll be operating on.
     */
    public function __construct(AdoptionAd $model, AdsRepositoryInterface $ads)
    {
        $this->model = $model;
        $this->ads = $ads;
    }


    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $parent_ad = $this->ads->create($attributes);
        $attributes['ad_id'] = $parent_ad->id;
        $adoption_ad = $this->model->create($attributes);

        return $adoption_ad;
    }
}
