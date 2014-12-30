<?php

class UsersController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /users
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /register
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('register');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /users
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),[
			'username' => 'required|unique:users|max:60',
			'email' => 'required|email|unique:users',
			'password' => 'required|min:6',
			'password_again' => 'required|same:password'
		]);

		if($validator->fails()){
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		User::create([
			'username' => Input::get('username'),
			'email' => Input::get('email'),
			'password' => Hash::make(Input::get('password')),
			'active' => true
		]);

		Flash::success('Congratulations! You are now signed in.');
		return Redirect::route('home');
	}

	/**
	 * Display the specified resource.
	 * GET /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$user = User::find($id);
		$sets = $user->sets;

		return View::make('dashboard')
			->with('user', $user)
			->with('sets', $sets);
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /users/{id}/edit
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
	 * PUT /users/{id}
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
	 * DELETE /users/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}