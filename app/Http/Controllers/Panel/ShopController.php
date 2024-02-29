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
use App\Models\Categorias;

class ShopController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('role:6');
	// }

	public function index($categoid)
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto',$categoid)->paginate(20);   
        	$data['marcas'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', $categoid)->get();    
			$data['nombre_categoria'] = Categorias::select('nombre_categoria')->where('id',$categoid)->first();
			return view('/layouts/shop',$data);
	}

	public function celulares_view()
	{
			// $data['productos'] = Productos::paginate(10);
		 	$data['productos'] = Productos::where('status', 1)->where('categoria_producto', 1)->paginate(12); 
        	$data['marcas_celular'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 1)->get();    
			return view('/layouts/shop_celulares',$data);
	}

	public function tvs_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto', 2)->paginate(12);   
        	$data['marcas_tvs'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 2)->get();    
			return view('/layouts/shop_tvs',$data);
	}

	public function refris_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto', 3)->paginate(12);   
        	$data['marca_refris'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 3)->get();    
			return view('/layouts/shop_refrigeradores',$data);
	}

	public function cocinas_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto', 4)->paginate(12);    
        	$data['marca_cocinas'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 4)->get();    
			return view('/layouts/shop_cocinas',$data);
	}

	public function juegos_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto', 5)->paginate(8);    
        	$data['marca_juegos'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 5)->get();    
			return view('/layouts/shop_juegos',$data);
	}


	public function audio_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto',6)->paginate(12);    
        	$data['marca_audio'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 6)->get();    
			return view('/layouts/shop_audio',$data);
	}

	public function laptops_view()
	{
        	$data['productos'] = Productos::where('status', 1)->where('categoria_producto',7)->paginate(12);    
        	$data['marca_laptops'] = Productos::select('marca_producto')->distinct()->where('categoria_producto', 7)->get();    
			return view('/layouts/shop_laptops',$data);
	}


	




}
