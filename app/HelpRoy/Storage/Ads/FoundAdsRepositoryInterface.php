<?php

namespace HelpRoy\Storage\Ads;

/**
 * Allows access and manipulation of found ads entities.
 */
interface FoundAdsRepositoryInterface
{	
	/**
	 * Returns an individual found ad based on id.
	 * 
	 * @param  int $id The id of the desired found ad.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function find($id);

	/**
	 * Retrivies all found ads.
	 * 
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new ad.
	 * 
	 * @param  array $attributes Found Ad entity attributes.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function create(array $attributes = []);
}