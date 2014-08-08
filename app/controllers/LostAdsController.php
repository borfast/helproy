<?php

use HelpRoy\Storage\Ads\LostAd;
use HelpRoy\Storage\Ads\LostAdsRepositoryInterface;

class LostAdsController extends \BaseController {

	public function __construct(LostAdsRepositoryInterface $repository)
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
	 * @param  LostAd 	$lostAd
	 * @return Response
	 */
	public function show(LostAd $lostAd)
	{
		return View::make('ads/lost/show', array('lostAd' => $lostAd));
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