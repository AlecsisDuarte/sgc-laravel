<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InicioController extends Controller
{
  public function __construct()
  {
    $this->middleware('auth');
  }

    public function showInicio()
    {
      return view('home');
    }

    public function showInstrumentacion(){
//     $cursos = DB::table('cursos')->get();
//      return $cursos;
        return view('instrumentacion');
      //return view('instrumentacion', ['cursos' => $cursos]);
    }


}
