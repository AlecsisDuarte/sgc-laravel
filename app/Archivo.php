<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Archivo extends Model
{
    protected $table = 'files';

    public function user()
    { //muchos archivos pertenecen a un usuario
      return $this->belongsTo('App\User');
    }
}
