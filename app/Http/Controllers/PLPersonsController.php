<?php namespace App\Http\Controllers;

use App\Models\PLPersons;
use Illuminate\Routing\Controller;

class PLPersonsController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /plpersons
	 *
	 * @return Response
	 */
	public function index()
	{
		return PLPersons::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /plpersons/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('app.persons.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /plpersons
	 *
	 * @return Response
	 */
	public function store()
	{
		$record = PLPersons::create(request()->all());
		return view('app.persons.create', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /plpersons/{id}
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
	 * GET /plpersons/{id}/edit
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
	 * PUT /plpersons/{id}
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
	 * DELETE /plpersons/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}