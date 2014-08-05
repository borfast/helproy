<?php

namespace HelpRoy\Storage\Ads;

/**
 * Allows access and manipulation of lost ads entities.
 */
interface LostAdsRepositoryInterface
{	
	/**
	 * Returns an individual lost ad based on id.
	 * 
	 * @param  int $id The id of the desired lost ad.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function find($id);

	/**
	 * Retrivies all lost ads.
	 * 
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new ad.
	 * 
	 * @param  array $attributes Lost Ad entity attributes.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function create(array $attributes = []);
}