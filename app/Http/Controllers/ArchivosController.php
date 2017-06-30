<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Storage;
use Auth;
use Hash;
use App\User;
use App\Archivo;
use Illuminate\Support\Facades\Input;

class ArchivosController extends Controller
{
   public function __construct()
   {
     $this->middleware('auth');
   }

   public function showUpload()
   {
     return view('upload');
   }

   public function doFiles()
   {
     //usuario en Session
     $user_session = Auth::user()->username;
     //id del usuario en sesion
     $id = Auth::user()->id;

     //objeto file
     $fileInput=Input::file('file');

     if (Input::hasFile('file')) {//si tiene un file

       //obtenemos y ciframos su nombre
       $fileName = $fileInput->getClientOriginalName();
       $fileNameEncrypt = Hash::make($fileName);

       //direccion donde se subira el archivo
       $path = public_path().'/uploads/'.$user_session.'id_'.$id.'/';
       if (!file_exists($path)) {//si no existe el path lo crea
         mkdir($path, 0755, true);
         chmod($path, 0755);
       }

       //obtenemos tipo del file
       $fileType = $fileInput->guessExtension();

       //obtenemos el tamano del file en MB
       $fileSize = $fileInput->getClientSize()/1024;



       //Procedimiento para guardar en DB

       //buscamos el id del usuario
       $usuario = User::find($id);

       $file              =   new Archivo;
       $file->nombre      =   $fileName;
       $file->ruta        =   $path;
       $file->tipo        =   $fileType;
       $file->tamaño      =   $fileSize;

       //hacemos la asociacion
       $file->user()->associate($usuario);

       //guardamos el file en el server y datos en db
       if ($fileInput->move($path, $fileName)) {//si se guarda el file en el server!
         //guardamos en la bd los datos del file
         $file->save();
         print_r('Movido');
       }else{
         print_r('No Movido');
       }

     }
  }

  public function doListFile(){
    //id del usuario en sesion
    $id = Auth::user()->id;

    $model = new Archivo;

    //obtener archivos donde el id es igual al del usuario en sesion
    $files = $model->where('user_id', '=', $id)->get();

    return view('listfile', ['files' => $files]);
  }

  public function doDeleteFile(){

  }

}
