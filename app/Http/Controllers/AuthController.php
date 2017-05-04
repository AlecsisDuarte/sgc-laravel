<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Route;

class AuthController extends Controller
{
  public function __construct()
  {
    $this->middleware('guest', ['except'=>'doLogout']);
  }

    public function showLogin()
    {
      return view('login');
    }

    public function doLogin()
    {
      //Validamos los campos
      $this->validate(request(),[
        'username' => 'required', // make sure the email is an actual email
        'password' => 'required|alphaNum|min:4' // password can only be alphanumeric and has to be greater than 3 characters
      ]);

      if(! auth()->attempt(request(['username','password']))){
        return back()->withError([
          'message' => 'Favor de revisar tus credenciales e intentar de nuevo.'
        ]);
        return back();
      }
      return redirect('inicio');

    }

    public function doLogout()
    {
      //Se cierra la sesion y te redirige a la pagina de Welcome
      auth()->logout();
      return redirect()->home();
    }
}
