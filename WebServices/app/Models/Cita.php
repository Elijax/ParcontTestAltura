<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cita extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tablacitas';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = 
	array(
	  'Fecha',
	  'Hora',
	  'NumeroDocumento',
	  'Paciente',
	  'Entidad',
	  'Telefono',
	  'Observaciones',
	  'IdMedico',
	  'Estado',
	  'Evento',
	  'ValorEvento',
	  'NumeroHistoria',
	  'Turno',
	  'DiaLock',
	  'FormaPago',
	  'ValorCuotaMod',
	  'IdPrestador',
	  'FechaHoraSolicita',
	  'FechaHoraAtiende',
	  'Area',
	  'DxPrincipal',
	  'IdRIPS',
	  'Consultorio'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
}

