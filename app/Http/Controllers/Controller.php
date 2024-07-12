<?php

namespace App\Http\Controllers;
use DB;

abstract class Controller
{
    public function index(){
        $alumnos = DB::table('alumnos')->get();
        return view ('listado',compact('listado'));
    }

}
