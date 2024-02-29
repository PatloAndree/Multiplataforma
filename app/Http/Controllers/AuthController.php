<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    //
    public function index()
	{
		return view('/layouts/registro');
	}

    public function registrar(Request $request){
       
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return back()->with('success', 'Te registraste correctamente');
    }

    public function login(){
        return view('/layouts/login');

    }

    public function logeado(Request $request){
        
        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        // if(Auth::attempt(['email' => $email, 'password' => $password]))
        if(Auth::attempt($credentials)){
            return redirect('/');
        }

        return back()->with('error', 'Correo o contraseña incorrecto');

    }

    public function salida(){

           

            Auth::logout();

            return view('/layouts/login');
    }
}
