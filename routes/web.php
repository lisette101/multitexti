<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|/*






//Route::get('productos', function(){
   //     $pastel = Pastel::productos('chocolate')->first();
     //   return view('saludo')->with('pastel', $pastel->nombre);
   // });
   */


  Route::view('/multitexti', 'multitexti')->name('multitexti');
   Route::view('/nosotros', 'nosotros')->name('nosotros');
   Route::view('/productos', 'productos')->name('productos');
   Route::view('/about', 'about')->name('about');
   Route::view('/layout', 'layout')->name('layout');
   Route::view('/tecnologia', 'tecnologia')->name('tecnologia');
   Route::view('/registro', 'registro')->name('registro');
   Route::view('/registro_admin', 'registro_admin')->name('registro_admin');
   Route::view('/registro_formulario', 'registro_formulario')->name('registro_formulario');
   Route::view('/producto_admin', 'producto_admin')->name('producto_admin');
   Route::view('/formulario_perfil', 'formulario_perfil')->name('formulario_perfil');
   Route::view('/perfil', 'perfil')->name('perfil');
   Route::view('/compras', 'compras')->name('compras');
   Route::view('/telas', 'telas')->name('telas');
   Route::view('/envio', 'envio')->name('envio');
   Route::view('/catalogo', 'catalogo')->name('catalogo');
   Route::view('/produccion', 'produccion')->name('produccion');
   Route::view('/especiales', 'especiales')->name('especiales');
   Route::view('/telas', 'telas')->name('telas');
   Route::view('/playeras', 'playeras')->name('playeras');
   Route::view('/sudaderas', 'sudaderas')->name('sudaderas');
   Route::view('/pantalones', 'pantalones')->name('pantalones');
   Route::view('/ofertas', 'ofertas')->name('ofertas');
   Route::view('/carrito', 'carrito')->name('carrito');
   Route::view('/envio_formulario', 'envio_formulario')->name('envio_formulario');
  /* Route::get('/', function () {

    return view('home');

})->name('home');*/


