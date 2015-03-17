<?php namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class CitaController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$citas = \App\Models\Cita::get();

		return response()->json([
			"citas"=> $citas->toArray()
			],200
		);	
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($Cita)
	{

    	$cita =  \App\Models\Cita::where('NumeroDocumento','=',$Cita)->get();

		return $cita->toArray();
	}
}
