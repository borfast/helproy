<?php
namespace HelpRoy\Storage\Ads;

/**
* Allows interacting with AdoptionAds.
*
*/
class EloquentAdoptionAdsRepository implements AdoptionAdsRepositoryInterface
{
    /**
     * {@inheritdoc}
     */
    public function find($id)
    {
        return AdoptionAd::find($id);
    }

    /**
     * {@inheritdoc}
     */
    public function all()
    {
        return AdoptionAd::all();
    }

    /**
     * {@inheritdoc}
     */
    public function create(array $attributes = [])
    {
        $adoptionAd = AdoptionAd::create($attributes);
        
        return $adoptionAd;
    }
}
