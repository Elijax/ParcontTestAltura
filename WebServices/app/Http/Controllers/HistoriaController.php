<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class HistoriaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$historias = \App\Models\Historia::get();

		return response()->json([
			"historias"=> $historias->toArray()
			],200
		);	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($History)
	{

    	$historia =  \App\Models\Historia::where('NumeroDocumento','=',$History)->get();

		return $historia->toArray();
	}
}
