<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;


class CuestionarioController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function index()
	{
		$cuestionarios = \App\Models\Cuestionario::get();

		return response()->json([
			"cuestionarios"=> $cuestionarios->toArray()
			],200
		);	
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
/*	public function store(Request $request)
	{
		if(!$request->input('author') || ! $request->input('title') || ! $request->input('summary'))
		{
			return response()->json(['mensaje' => 'No se pudieron procesar los valores', 'codigo' => 422],422);
		}
		\App\Models\Cuestionario::create($request->all());
		return response()->json(['mensaje' => 'Cuestionario insertado'],201);
	}
*/

	public function store(Request $request)

	{
		$cuestionario = new \App\Models\Cuestionario();

		$cuestionario->NumeroDocumento = $request->input('NumeroDocumento');
		$cuestionario->NumeroHistoria = $request->input('NumeroHistoria');
		$cuestionario->Edad = $request->input('Edad');
		$cuestionario->CodigoEntidad = $request->input('CodigoEntidad');

		$respuesta1 = $request->input('q1');
		$respuesta2 = $request->input('q2');
		$respuesta3 = $request->input('q3');
		$respuesta4 = $request->input('q4');
		$respuesta5 = $request->input('q5');
		$respuesta6 = $request->input('q6');
		$respuesta7 = $request->input('q7');
		$respuesta8 = $request->input('q8');
		$respuesta9 = $request->input('q9');
		$respuesta10 = $request->input('q10');
		$respuesta11 = $request->input('q11');
		$respuesta12 = $request->input('q12');
		$respuesta13 = $request->input('q13');
		$respuesta14 = $request->input('q14');
		$respuesta15 = $request->input('q15');
		$respuesta16 = $request->input('q16');

		$respuesta17 = $request->input('q17');
		$respuesta18 = $request->input('q18');
		$respuesta20 = $request->input('q20');

		if ($respuesta1=="No")			
		{
			$cuestionario->RespuestaPregunta1 = $request->input('q1');
		}
		if ($respuesta1=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta1 = $request->input('q1');
		 	$cuestionario->CantidadPregunta1 = $request->input('cantidadQ1');
		 	$cuestionario->IntervaloPregunta1 = $request->input('intervaloQ1');	
		}
		if ($respuesta2=="No")			
		{
			$cuestionario->RespuestaPregunta2 = $request->input('q2');
		}

		if ($respuesta2=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta2 = $request->input('q2');
		 	$cuestionario->CantidadPregunta2 = $request->input('cantidadQ2');
		 	$cuestionario->IntervaloPregunta2 = $request->input('intervaloQ2');	
		}
		if ($respuesta3=="No")			
		{
			$cuestionario->RespuestaPregunta3 = $request->input('q3');
		}

		if ($respuesta3=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta3 = $request->input('q3');
		 	$cuestionario->CantidadPregunta3 = $request->input('cantidadQ3');
		 	$cuestionario->IntervaloPregunta3 = $request->input('intervaloQ3');	
		}
		if ($respuesta4=="No")			
		{
			$cuestionario->RespuestaPregunta4 = $request->input('q4');
		}

		if ($respuesta4=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta4 = $request->input('q4');
		 	$cuestionario->CantidadPregunta4 = $request->input('cantidadQ4');
		 	$cuestionario->IntervaloPregunta4 = $request->input('intervaloQ4');	
		}
		if ($respuesta5=="No")			
		{
			$cuestionario->RespuestaPregunta5 = $request->input('q5');
		}

		if ($respuesta5=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta5 = $request->input('q5');
		 	$cuestionario->CantidadPregunta5 = $request->input('cantidadQ5');
		 	$cuestionario->IntervaloPregunta5 = $request->input('intervaloQ5');	
		}
		if ($respuesta6=="No")			
		{
			$cuestionario->RespuestaPregunta6 = $request->input('q6');
		}

		if ($respuesta6=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta6 = $request->input('q6');
		 	$cuestionario->CantidadPregunta6 = $request->input('cantidadQ6');
		 	$cuestionario->IntervaloPregunta6 = $request->input('intervaloQ6');	
		}
		if ($respuesta7=="No")			
		{
			$cuestionario->RespuestaPregunta7 = $request->input('q7');
		}

		if ($respuesta7=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta7 = $request->input('q7');
		 	$cuestionario->CantidadPregunta7 = $request->input('cantidadQ7');
		 	$cuestionario->IntervaloPregunta7 = $request->input('intervaloQ7');	
		}
			if ($respuesta8=="No")			
		{
			$cuestionario->RespuestaPregunta8 = $request->input('q8');
		}

		if ($respuesta8=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta8 = $request->input('q8');
		 	$cuestionario->CantidadPregunta8 = $request->input('cantidadQ8');
		 	$cuestionario->IntervaloPregunta8 = $request->input('intervaloQ8');	
		}
		if ($respuesta9=="No")			
		{
			$cuestionario->RespuestaPregunta9 = $request->input('q9');
		}

		if ($respuesta9=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta9 = $request->input('q9');
		 	$cuestionario->CantidadPregunta9 = $request->input('cantidadQ9');
		 	$cuestionario->IntervaloPregunta9 = $request->input('intervaloQ9');	
		}
		if ($respuesta10=="No")			
		{
			$cuestionario->RespuestaPregunta10 = $request->input('q10');
		}

		if ($respuesta10=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta10 = $request->input('q10');
		 	$cuestionario->CantidadPregunta10 = $request->input('cantidadQ10');
		 	$cuestionario->IntervaloPregunta10 = $request->input('intervaloQ10');	
		}
		if ($respuesta11=="No")			
		{
			$cuestionario->RespuestaPregunta11 = $request->input('q11');
		}

		if ($respuesta11=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta11 = $request->input('q11');
		 	$cuestionario->CantidadPregunta11 = $request->input('cantidadQ11');
		 	$cuestionario->IntervaloPregunta11 = $request->input('intervaloQ11');	
		}
		if ($respuesta12=="No")			
		{
			$cuestionario->RespuestaPregunta12 = $request->input('q12');
		}

		if ($respuesta12=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta12 = $request->input('q12');
		 	$cuestionario->CantidadPregunta12 = $request->input('cantidadQ12');
		 	$cuestionario->IntervaloPregunta12 = $request->input('intervaloQ12');	
		}
		if ($respuesta13=="No")			
		{
			$cuestionario->RespuestaPregunta13 = $request->input('q13');
		}

		if ($respuesta13=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta13 = $request->input('q13');
		 	$cuestionario->CantidadPregunta13 = $request->input('cantidadQ13');
		 	$cuestionario->IntervaloPregunta13 = $request->input('intervaloQ13');	
		}
		if ($respuesta14=="No")			
		{
			$cuestionario->RespuestaPregunta14 = $request->input('q14');
		}

		if ($respuesta14=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta14 = $request->input('q14');
		 	$cuestionario->CantidadPregunta14 = $request->input('cantidadQ14');
		 	$cuestionario->IntervaloPregunta14 = $request->input('intervaloQ14');	
		}
		if ($respuesta15=="No")			
		{
			$cuestionario->RespuestaPregunta15 = $request->input('q15');
		}

		if ($respuesta15=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta15 = $request->input('q15');
		 	$cuestionario->CantidadPregunta15 = $request->input('cantidadQ15');
		 	$cuestionario->IntervaloPregunta15 = $request->input('intervaloQ15');
		 	$cuestionario->DescripcionPregunta15 = $request->input('descripcionQ15');		
		}
		if ($respuesta16=="No")			
		{
			$cuestionario->RespuestaPregunta16 = $request->input('q16');
		}

		if ($respuesta16=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta16 = $request->input('q16');
		 	$cuestionario->DescripcionPregunta16 = $request->input('descripcionQ16');	
		}
		if ($respuesta17=="No")			
		{
			$cuestionario->RespuestaPregunta17 = $request->input('q17');
		}
		if ($respuesta17=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta17 = $request->input('q17');
		 	$cuestionario->DescripcionPregunta17 = $request->input('descripcionQ17');	
		}
		if ($respuesta18=="No")			
		{
			$cuestionario->RespuestaPregunta17 = $request->input('q18');
		}
		if ($respuesta18=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta18 = $request->input('q18');
		 	$cuestionario->DescripcionPregunta18 = $request->input('descripcionQ18');	
		}
		if ($respuesta18=="No")			
		{
			$cuestionario->RespuestaPregunta18 = $request->input('q18');
		}

	 	$cuestionario->RespuestaPregunta19 = $request->input('q19');

		if ($respuesta20=="Si") 
		{	
		 	$cuestionario->RespuestaPregunta20 = $request->input('q20');
		 	$cuestionario->DescripcionPregunta20 = $request->input('descripcionQ20');	
		}

		if ($respuesta20=="No")			
		{
			$cuestionario->RespuestaPregunta20 = $request->input('q20');
		}

	 	$cuestionario->RespuestaPregunta21 = $request->input('q21');

	 	$cuestionario->RespuestaPregunta22 = $request->input('q22');	 	

		$cuestionario->save();	

	 	return response()->json([
	 		"msg"=> "Cuestionario insertado!",
	 		"id del cuestionario"=> $cuestionario->id
	 		],200
	 	);
	}	

	// public function store(Request $request)
	// {
	// 	$cuestionario = new \App\Models\Cuestionario();

	// 	$cuestionario->author = $request->author;
	// 	$cuestionario->NumeroDocumento = $request->NumeroDocumento;		
	// 	$cuestionario->title = $request->title;
	// 	$cuestionario->summary = $request->summary;
		
	// 	$cuestionario->save(); 

	// 	return response()->json([
	// 		"msg"=> "Cuestionario insertado!",
	// 		"id"=> $cuestionario->id
	// 		],200
	// 	);
	// }
	
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{

		$cuestionario = \App\Models\Cuestionario::find($id);

		return response()->json([
			"cuestionarios"=> $cuestionario
			],200
		);	

	}

	/**
	 * Update the specified resource in storage.
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
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
