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

class ProductosController extends Controller
{
    // public function __construct()
    // {
    // 	$this->middleware('role:6');
    // }

    public function index()
    {
        return view('/layouts/productodetalle');
    }

    public function listarProductos()
    {
        // $user = Auth::user();
        $productos = Productos::where('status', 1)->get();
        // $productos = Categorias::where('status', 1)->get();
        $dataProductos = [];
        foreach ($productos as $producto) {
            $Categoria = Categorias::where('id', $producto->categoria_producto)->first();
            $editar =
                '
      <div class="inline-flex">
       <a href="javascript:;" class="producto-edit" data-productoid="' .
                $producto->id .
                '"><i data-feather="edit" style="width:20px;height:17px;color:#10AC84"></i></a>
       <a href="javascript:;" class="producto-delete" data-productoid="' .
                $producto->id .
                '"><i data-feather="trash" style="width:20px;height:17px;color:#EB455F"></i></a>
      </div>
      <script>
          feather.replace()
      </script>
      ';
            $arrayProductos = [
                'id' => $producto->id,
                'nombre_producto' => $producto->nombre_producto,
                'imagen_producto' =>
                    '
    <img src="' .
                    $producto->imagen_producto .
                    '" style="max-width:30px;border-radius:10px">
    ',
                'stock_producto' => $producto->stock_producto,
                'precio_compra' => $producto->precio_compra,
                'precio_venta' => $producto->precio_venta,
                // 'fecha_ven_producto'=> $producto->fecha_ven_producto,
                'categoria_producto' => $Categoria->nombre_categoria,
                'marca_producto' => $producto->marca_producto,
                'actions' => $editar,
            ];
            array_push($dataProductos, (object) $arrayProductos);
        }
        $dataReturn['data'] = $dataProductos;
        return json_encode($dataReturn);
    }

    public function data(Request $request, $producto)
    {
        ini_set('memory_limit', '2048M');
        $respuesta = Productos::where('nombre_producto', 'LIKE', '%' . $producto . '%')		
            ->where('status', 1)
            ->limit(6)
            ->get();
        if ($respuesta) {
            echo json_encode(['sw_error' => 0, 'info' => $respuesta]);
        } else {
            echo json_encode(['sw_error' => 1, 'data' => []]);
        }
    }
}
