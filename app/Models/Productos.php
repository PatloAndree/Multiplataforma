<?php

namespace App\Models;
use App\Models\Categorias;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Productos extends Model
{
	use HasFactory;
	protected $table = 'productos';
	protected $fillable = [
		'id',
		'nombre_producto',
		'marca_producto',
		'imagen_producto',
		'link',
		'tienda_producto',
		'precio_actual',
		'descuento',
		'categoria_producto',
		'ubicacion',
		'created_at',
		'updated_at',
		'status'
	];

	public function categoria()
    {
        return $this->belongsTo(Categorias::class, 'categoria_producto');
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
