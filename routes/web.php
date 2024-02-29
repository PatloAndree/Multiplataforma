<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Panel\ShopController;
use App\Http\Controllers\Panel\RegisterController;
use App\Http\Controllers\Panel\LoginController;
use App\Http\Controllers\Panel\PerfilController;
use App\Http\Controllers\Panel\ListaDeseosController;
use App\Http\Controllers\Panel\AcercaController;
use App\Http\Controllers\Panel\NoticiasController;
use App\Http\Controllers\Panel\ContactoController;
use App\Http\Controllers\Panel\ProductoDetalleController;
use App\Http\Controllers\Panel\ProductosController;
use App\Http\Controllers\Panel\OFertasController;
use App\Http\Controllers\Panel\LiquidacionController;
use App\Http\Controllers\Panel\MarcasController;
use App\Http\Controllers\AppController;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('home');
// });
    Route::get('/', [AppController::class, 'index'])->name('home');

    Route::post('registro', [AuthController::class, 'registrar'])->name('registrar');
    Route::get('registro', [AuthController::class, 'index'])->name('registro.index');
    Route::get('/login', [AuthController::class, 'login'])->name('login.index');
    Route::post('/login', [AuthController::class, 'logeado'])->name('logeado');

    Route::delete('/salir', [AuthController::class, 'salida'])->name('salida');

    // Route::get('shop', [ShopController::class, 'index'])->name('shop.index');

    // RUTAS PARA CATEGORIAS GENERALES
    Route::get('shop/categoria/{categoid?}', [ShopController::class, 'index'])->name('shop.index');
    Route::get('categorias/celulares', [ShopController::class, 'celulares_view'])->name('shop_celulares');
    Route::get('categorias/tvs', [ShopController::class, 'tvs_view'])->name('shop_tvs');
    Route::get('categorias/refrigeradoras', [ShopController::class, 'refris_view'])->name('refris_view');
    Route::get('categorias/cocina', [ShopController::class, 'cocinas_view'])->name('cocinas');
    Route::get('categorias/videojuegos', [ShopController::class, 'juegos_view'])->name('juegos');
    Route::get('categorias/audio', [ShopController::class, 'audio_view'])->name('audio');
    Route::get('categorias/laptops', [ShopController::class, 'laptops_view'])->name('laptops');


    Route::get('productodetalle/{productoid?}', [ProductoDetalleController::class, 'index'])->name('productodetalle.index');

    // Route::get('registro', [RegisterController::class, 'index'])->name('registro.index');


    Route::get('perfil', [PerfilController::class, 'index'])->name('perfil.index');

    Route::get('listadeseo', [ListaDeseosController::class, 'index'])->name('listadeseo.index');

    Route::get('acercade', [AcercaController::class, 'index'])->name('acercade.index');

    Route::get('contacto', [ContactoController::class, 'index'])->name('contacto.index');

    Route::get('noticias', [NoticiasController::class, 'index'])->name('noticias.index');

    Route::get('ofertas', [OFertasController::class, 'index'])->name('ofertas.index');

    Route::get('liquidacion', [LiquidacionController::class, 'index'])->name('liquidacion.index');

    Route::get('marcas', [MarcasController::class, 'index'])->name('marcas.index');

    Route::get('{producto?}', [ProductosController::class, 'data'])->name('buscar.data');

    Route::get('/ejecutar-python', 'MarcasController@ejecutarScript');




