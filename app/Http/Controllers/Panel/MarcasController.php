<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Productos;
use Illuminate\Support\Facades\Storage;


class MarcasController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('role:6');
	// }
	public function index()
	{
		  $productos = $this->mostrarProductos();

    // Muestra los resultados en la vista
    return view('/layouts/marcas', ['productos' => $productos]);
	
	}

	
	public function index2()
	{

		$ruta_script = base_path('oescle.py');
		$ruta_script2 = '"' . $ruta_script . '"';
		$resultado = exec("python $ruta_script2 2>&1");

		// Puedes hacer algo con el resultado si lo deseas
		if ($resultado !== null) {
			// Almacenar el resultado en un archivo
			Storage::put('resultado_python.txt', $resultado);

			// Pasar los resultados a la vista
			return view('/layouts/marcas', ['resultado' => $resultado]);
		} else {
			// Manejar el caso en que el resultado sea nulo
			return "No se pudo obtener un resultado del script Python.";
		}
			// return view('/layouts/marcas',$data);
	}

	public function mostrarProductos()
	{
		// Lee los datos del archivo CSV
		$productos = [];
		if (($handle = fopen('celus.csv', 'r')) !== false) {
			while (($data = fgetcsv($handle, 1000, ',')) !== false) {
				$productos[] = $data;
			}
			fclose($handle);
		}

		// Pasa los datos a la vista
		return view('/layouts/marcas', ['productos' => $productos]);
	}


	public function ejecutarScript()
    {
       // Ruta al script Python
	   $ruta_script = base_path('oescle.py');
    
	   // Encerrar la ruta entre comillas para manejar espacios
	   $ruta_script = '"' . $ruta_script . '"';
	   
	   // Ejecutar el script Python
		echo($ruta_script);
		exit;

	//    $resultado = exec("python $ruta_script 2>&1");

	   
        // return view('/layouts/marcas', ['resultado' => $resultado]);
    }

}
