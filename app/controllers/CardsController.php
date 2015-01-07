<?php

class CardsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /sets
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /cards/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$sets = Auth::user()->sets;
		return View::make('cards.create')
			->with('sets', $sets);
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /sets
	 *
	 * @return Response
	 */
	public function store()
	{
		$validator = Validator::make(Input::all(),[
			'title' => 'required|max:60'
		]);

		if($validator->fails()){
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		Card::create([
			'title' => Input::get('title'),
			'front' => Input::get('front'),
			'back' => Input::get('back'),
			'user_id' => Input::get('user_id'),
			'set_id' => Input::get('set_id')
		]);

		return Redirect::route('users.show', Auth::user()->id);
	}

	/**
	 * Display the specified resource.
	 * GET /sets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$card =  Card::find($id);
		$card->views += 1;
		$card->save();

		return View::make('cards.show')
			->with('card', $card);

	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /sets/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$card = Card::find($id);
		$sets = Set::all();

		return View::make('cards.edit')
			->with('card', $card)
			->with('sets', $sets);
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /sets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$validator = Validator::make(Input::all(),[
			'title' => 'required|max:60'
		]);

		if($validator->fails()){
			return Redirect::back()
				->withErrors($validator)
				->withInput();
		}

		$card = Card::find($id);
		$card->title = Input::get('title');
		$card->front = Input::get('front');
		$card->back = Input::get('back');
		$card->set_id = Input::get('set_id');
		$card->save();

		return Redirect::route('cards.show', $id);
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /sets/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}