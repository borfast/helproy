<?php

use HelpRoy\Storage\Users\User;
use HelpRoy\Storage\Users\UsersRepositoryInterface;

class UsersController extends \BaseController {

	public function __construct(UsersRepositoryInterface $repository)
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
	 * @param  User 	$user
	 * @return Response
	 */
	public function show(User $user)
	{
		return View::make('users/show', array('user' => $user));
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