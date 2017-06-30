<?php

use Illuminate\Database\Seeder;

class pruebaCursos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('cursos')->insert([
        'id' => '1',
        'clave' => 'ZAF56',
        'grupo' => 'A',
        'nombre_materia' => 'Ing. Software',
        'rfc' => 'RFCa6sd54a6g1a',
        'apellidos_empleado' => 'ap1 ap2',
        'nombres_empleado' => 'jorge vens',
        'area_academica' => 'sitemas',
      ]);
      DB::table('cursos')->insert([
        'id' => '2',
        'clave' => 'ZAS65',
        'grupo' => 'B',
        'nombre_materia' => 'Sistemas Programables',
        'rfc' => 'RFCa6sd4af2',
        'apellidos_empleado' => 'ap1.1 ap2.1',
        'nombres_empleado' => 'nombress',
        'area_academica' => 'Sistemas',
      ]);
    }
}
