<?php namespace App\Http\Controllers;

use App\Models\PLCities;
use Illuminate\Routing\Controller;

class PLCitiesController extends Controller {

	/**
	 * Display a listing of the resource.
	 * GET /plcities
	 *
	 * @return Response
	 */
	public function index()
	{
		return PLCities::get();
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /plcities/create
	 *
	 * @return Response
	 */
	public function create()
	{
		return view('app.cities.create');
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /plcities
	 *
	 * @return Response
	 */
	public function store()
	{
	    $record = PLCities::create(request()->all());

        return view('app.cities.create', $record->toArray());
	}

	/**
	 * Display the specified resource.
	 * GET /plcities/{id}
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
	 * GET /plcities/{id}/edit
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
	 * PUT /plcities/{id}
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
	 * DELETE /plcities/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}