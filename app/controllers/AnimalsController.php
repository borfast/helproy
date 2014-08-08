<?php

use HelpRoy\Storage\Animals\Animal;
use HelpRoy\Storage\Animals\AnimalsRepositoryInterface;

class AnimalsController extends \BaseController {

	public function __construct(AnimalsRepositoryInterface $repository)
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
	 * @param  Animal  	$animal
	 * @return Response
	 */
	public function show(Animal $animal)
	{
		return View::make('animals/show', array('animal' => $animal));
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