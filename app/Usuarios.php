<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function buscarUsuario($username)
    {
      return Usuarios::where('username',$username);
    }
}
