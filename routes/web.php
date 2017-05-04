<?php

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

Route::get('/', function () {
  if(Auth::guest()){
    return view('welcome');
  }else{
    return redirect('inicio');
  }
})->name('home');

// Route::get('/bienvenido', function () {
//     return view('welcome');
// })->name('welcome');

Route::get('/iniciarSesion', 'AuthController@showLogin')->name('login');

Route::post('/iniciarSesion', 'AuthController@doLogin');

Route::get('/inicio', 'InicioController@showInicio');

Route::get('/instrumentaciones', 'InicioController@showInstrumentacion');

Route::post('/cerrarSesion', 'AuthController@doLogout')->name('logout');
Route::get('/cerrarSesion', 'AuthController@doLogout')->name('logout');
