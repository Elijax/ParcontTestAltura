<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Historia extends Model {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'tablahistorias';

	/**
	 * The attributes that are mass assignable.
	 *
	 * @var array
	 */
	protected $fillable = 
	array(
	  'NumeroHistoria',
	  'FechaNacimiento',
	  'FechaHistoria',
	  'Empresa',
	  'OCUPACION',
	  'Dirección',
	  'Teléfonos',
	  'EC',
	  'TipoDocumento',
	  'NumeroDocumento',
	  'CodigoEntidad',
	  'TipoUsuario',
	  'PrimerApellido',
	  'SegundoApellido',
	  'PrimerNombre',
	  'SegundoNombre',
	  'Edad',
	  'UnidadMedidaEdad',
	  'Sexo',
	  'CodigoDtoMunicipio',
	  'ZonaUrbana',
	  'CodMedico',
	  'PathIMG1',
	  'Email',
	  'IdMedico',
	  'Email1',
	  'Observaciones',
	  'sedecodigoentidad',
	  'informante',
	  'parentesco',
	  'edadInformante'
	);

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = [];
}

