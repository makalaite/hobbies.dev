<?php namespace App\Http\Controllers;

use App\Models\PLHobbies;
use Illuminate\Routing\Controller;

class PLHobbiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /plhobbies
	 *
	 * @return Response
	 */
	public function index()
	{
		return PLHobbies::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /plhobbies/create
	 *
	 * @return Response
	 */
	public function create()
	{
        return view('app.hobbies.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /plhobbies
	 *
	 * @return Response
	 */
	public function store()
	{
        $record = PLHobbies::create(request()->all());

        return view('app.hobbies.create', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /plhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /plhobbies/{id}/edit
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
	 * PUT /plhobbies/{id}
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
	 * DELETE /plhobbies/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}