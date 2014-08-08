<?php

use HelpRoy\Storage\Ads\FoundAd;
use HelpRoy\Storage\Ads\FoundAdsRepositoryInterface;

class FoundAdsController extends \BaseController {

	public function __construct(FoundAdsRepositoryInterface $repository)
	{
		$this->repository = $repository;
	}

	/**
	 * Display a listing of the resource.
	 * GET /contacts
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /contacts/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /contacts
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /contacts/{id}
	 *
	 * @param  FoundAd 	$foundAd
	 * @return Response
	 */
	public function show(FoundAd $foundAd)
	{
		return View::make('ads/found/show', array('foundAd' => $foundAd));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /contacts/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /contacts/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}