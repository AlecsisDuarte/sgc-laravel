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
use App\Archivo;


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

Route::post('/iniciarSesion', 'AuthController@doLogin')->name('login');

Route::get('/inicio', 'InicioController@showInicio')->name('inicio');

//Route::get('/instrumentacion', 'InicioController@showInstrumentacion');
Route::get('/instrumentacion', function(){
  $cursos = DB::table('cursos')->orderBy('id')->get();
  return view('instrumentacion', ['cursos' => $cursos]);
})->name('instrumentacion');

//Route::get('/upload', 'InicioController@showUpload');
Route::get('/pdf', 'InicioController@showPdf')->name('pdfViewer');


Route::post('/cerrarSesion', 'AuthController@doLogout')->name('logout');
Route::get('/cerrarSesion', 'AuthController@doLogout')->name('logout');

Route::get('upload', 'ArchivosController@showUpload')->name('uploadView');
Route::post('files','ArchivosController@doFiles')->name('uploadFiles');

Route::get('listmyfiles','ArchivosController@doListmyFile')->name('listmyFiles');

Route::get('listfiles','ArchivosController@doListFile')->name('listFiles');
Route::post('listfiles','ArchivosController@doListFile')->name('listFilesPost');

Route::post('deletefile','ArchivosController@doDeleteFile')->name('deleteFiles');
