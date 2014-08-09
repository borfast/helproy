<?php

namespace HelpRoy\Storage\Ads;

class LostAd extends \Eloquent
{
    protected $fillable = [];

    protected $primaryKey = 'ad_id';

    /**
     * Allows access to the main ad data related with this ad.
     * @return Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function ad()
    {
        return $this->belongsTo('Ad');
    }
}
