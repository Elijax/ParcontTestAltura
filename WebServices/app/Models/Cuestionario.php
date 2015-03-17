<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuestionario extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tablatestaltura';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = [
		'NumeroDocumento',
		'NumeroHistoria',
		'Edad',
		'CodigoEntidad',

		'RespuestaPregunta1',				
		'IntervaloPregunta1',
		'CantidadPregunta1',

		'RespuestaPregunta2',				
		'IntervaloPregunta2',
		'CantidadPregunta2',

		'RespuestaPregunta2',				
		'IntervaloPregunta2',
		'CantidadPregunta2',

		'RespuestaPregunta3',				
		'IntervaloPregunta3',
		'CantidadPregunta3',

		'RespuestaPregunta4',				
		'IntervaloPregunta4',
		'CantidadPregunta4',

		'RespuestaPregunta5',				
		'IntervaloPregunta5',
		'CantidadPregunta5',

		'RespuestaPregunta6',				
		'IntervaloPregunta6',
		'CantidadPregunta6',

		'RespuestaPregunta7',				
		'IntervaloPregunta7',
		'CantidadPregunta7',

		'RespuestaPregunta8',				
		'IntervaloPregunta8',
		'CantidadPregunta8',

		'RespuestaPregunta9',				
		'IntervaloPregunta9',
		'CantidadPregunta9',

		'RespuestaPregunta10',				
		'IntervaloPregunta10',
		'CantidadPregunta10',

		'RespuestaPregunta11',				
		'IntervaloPregunta11',
		'CantidadPregunta11',

		'RespuestaPregunta12',				
		'IntervaloPregunta12',
		'CantidadPregunta12',

		'RespuestaPregunta13',				
		'IntervaloPregunta13',
		'CantidadPregunta13',

		'RespuestaPregunta14',				
		'IntervaloPregunta14',
		'CantidadPregunta14',

		'RespuestaPregunta15',				
		'IntervaloPregunta15',
		'CantidadPregunta15',		
		'DescripcionPregunta15',

		'RespuestaPregunta16',	
		'DescripcionPregunta16',

		'RespuestaPregunta17',	
		'DescripcionPregunta17',

		'RespuestaPregunta18',	
		'DescripcionPregunta18',

		'RespuestaPregunta19',

		'RespuestaPregunta20',	
		'DescripcionPregunta20',

		'RespuestaPregunta21',

		'RespuestaPregunta22',						


	];


	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];

}