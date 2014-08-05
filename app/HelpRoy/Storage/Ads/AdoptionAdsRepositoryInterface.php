<?php

namespace HelpRoy\Storage\Ads;

/**
 * Allows access and manipulation of adoption ads entities.
 */
interface AdoptionAdsRepositoryInterface
{	
	/**
	 * Returns an individual adoption ad based on id.
	 * 
	 * @param  int $id The id of the desired adoption ad.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function find($id);

	/**
	 * Retrivies all adoption ads.
	 * 
	 * @return Illuminate\Database\Eloquent\Collection
	 */
	public function all();

	/**
	 * Creates a new ad.
	 * 
	 * @param  array $attributes Adoption Ad entity attributes.
	 * @return HelpRoy\Storage\Ads\Ad
	 */
	public function create(array $attributes = []);
}