<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    public function buscar($username)
    {
      return Usuarios::where('username',$username);

    }
}
