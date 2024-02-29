<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Productos;


class OfertasController extends Controller
{
	// public function __construct()
	// {
	// 	$this->middleware('role:6');
	// }

	public function index()
	{
		$data['productos'] = Productos::where('status', 1)
        ->orderBy('categoria_producto')
        ->groupBy('categoria_producto')
        ->limit(12)
        ->get();

        $data['celulares'] = Productos::where('status', 1)->where('categoria_producto',1)->get();    
        $data['televisores'] = Productos::where('status', 1)->where('categoria_producto',2)->get(); 
        $data['refrigeradoras'] = Productos::where('status', 1)->where('categoria_producto',3)->get(); 
        $data['cocinas'] = Productos::where('status', 1)->where('categoria_producto',4)->get(); 

		return view('/layouts/ofertas',$data);
	}


}
