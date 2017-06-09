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

    public function showUpload()
    {
      return view('upload');
    }

}
