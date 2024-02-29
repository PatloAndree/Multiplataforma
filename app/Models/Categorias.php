<?php

namespace App\Models;
use App\Models\Productos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categorias extends Model
{
	use HasFactory;
	protected $table = 'categorias';
	protected $fillable = [
		'id',
		'nombre_categoria',
		'status'
	];

	public function productos()
    {
        return $this->hasMany(Productos::class, 'id');
    }

	// public function usuario()
	// {
	// 	return $this->belongsTo(User::class, 'usuario_registra_id', 'id');
	// }

	// public function empleado()
	// {
	// 	return $this->belongsTo(User::class, 'usuario_registrado_id', 'id');
	// }

	// public function asignacion()
	// {
	// 	return $this->belongsTo(Asignacionesdiarias::class, 'asignaciondiaria_id', 'id');
	// }
}
