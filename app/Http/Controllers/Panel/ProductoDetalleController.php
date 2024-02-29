<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
// use App\Models\Asignacionesdiarias;
// use App\Models\Asistencias;
// use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Productos;

class ProductoDetalleController extends Controller
{
    // public function __construct()
    // {
    // 	$this->middleware('role:6');
    // }

    public function index($productoid)
    {
        $producto = Productos::where('status', 1)->where('id', $productoid)->first();
        $data['producto'] = Productos::where('status', 1)->where('id', $productoid)->first();
        $nombreCategoria = $producto->categoria->nombre_categoria;
        // print_r($nombreCategoria);
        // exit;
        $data['nombreCategoria'] = $nombreCategoria;

        if ($producto) {
            // Obtener el nombre del producto
            $nombreProducto = $producto->nombre_producto;

            // Realizar la segunda consulta utilizando el nombre del producto obtenido

            // $data['productosSimilares'] = Productos::select('nombre_producto', 'tienda_producto', 'marca_producto', 'imagen_producto', 'link', 'tienda_producto', 'precio_actual', 'descuento', 'categoria_producto')
            //     ->where('nombre_producto', 'LIKE', "%$nombreProducto%")
            //     ->get();

            // $data['productosSimilares'] = Productos::select('nombre_producto', 'tienda_producto', 'marca_producto', 'imagen_producto', 'link', 'tienda_producto', 'precio_actual', 'descuento', 'categoria_producto')
            //     ->where('nombre_producto', 'LIKE', "%$nombreProducto%")
            //     ->orWhere(function ($query) use ($nombreProducto) {
            //         // Obtener todos los productos
            //         $productos = Productos::all();

            //         // Calcular la similitud de cada nombre de producto con el nombre de búsqueda
            //         foreach ($productos as $producto) {
            //             similar_text($producto->nombre_producto, $nombreProducto, $similitud);

            //             // Establecer un umbral de similitud, por ejemplo, 60%
            //             if ($similitud >= 60) {
            //                 // Agregar una cláusula OR al query para incluir productos similares
            //                 $query->orWhere('nombre_producto', 'LIKE', "%$producto->nombre_producto%");
            //             }
            //         }
            //     })
            //     ->get();

            
				$data['productosSimilares'] = Productos::select('nombre_producto', 'tienda_producto', 'marca_producto', 'imagen_producto', 'link', 'tienda_producto', 'precio_actual', 'descuento', 'categoria_producto')
				->where('nombre_producto', 'LIKE', "%$nombreProducto%")
				->orWhere(function ($query) use ($nombreProducto) {
					// Obtener todos los productos
					$productos = Productos::all();
					
					// Arreglo para rastrear las tiendas ya incluidas
					$tiendasIncluidas = [];
					
					// Calcular la similitud de cada nombre de producto con el nombre de búsqueda
					foreach ($productos as $producto) {
						similar_text($producto->nombre_producto, $nombreProducto, $similitud);
						
						// Establecer un umbral de similitud, por ejemplo, 60%
						if ($similitud >= 60) {
							// Verificar si el producto no ha sido incluido de la misma tienda
							if (!in_array($producto->tienda_producto, $tiendasIncluidas)) {
								// Agregar una cláusula OR al query para incluir productos similares de diferentes tiendas
								$query->orWhere('nombre_producto', 'LIKE', "%$producto->nombre_producto%");
								
								// Agregar la tienda actual al arreglo de tiendas incluidas
								$tiendasIncluidas[] = $producto->tienda_producto;
							}
						}
					}
				})
				->get();
                

           
                // $palabrasClave = explode(' ', $nombreProducto);
            // // Inicializar la consulta con todos los productos
            // $query = Productos::query();

            // // Aplicar la búsqueda para cada palabra clave
            // foreach ($palabrasClave as $palabra) {
            // 	$query->orWhere('nombre_producto', 'LIKE', "%$palabra%");
            // }

            // // Obtener los productos similares
            // $data['productosSimilares'] = $query->get();

            // Hacer algo con los resultados obtenidos
            // Por ejemplo, devolver los resultados a la vista
            // return view('tuvista', ['productos' => $productosSimilares]);
            return view('/layouts/productodetalle', $data);
        } else {
            // Manejar el caso en que no se encuentre el producto
            // Por ejemplo, redirigir a una página de error
            // return redirect()->route('error');

            return view('/layouts/productodetalle', $data);
        }

        // return view('/layouts/productodetalle',$data);
    }
}
