<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Alumno;
use App\Http\Requests\CreateAlumnosRequest;



class AlumnosController extends Controller
{
    public function index(){
        /* $listado = DB::table('alumnos')->get();
        return view('listado',compact('listado')); */
        /* $listado =[
            ['titulo'=> 'persona01'],
            ['titulo'=> 'persona02'],
        ];
        return view('listado',compact('listado')); */
        $listado = Alumno::get();
        return view('listado',compact('listado'));

    }
    public function show($id_alumno){
        /* return Alumno::find($id_alumno); */

        return view('show',[
            'listado' => Alumno::find($id_alumno)
        ]);
    }
    public function ingreso(){
        return view('ingreso');
    }

    public function store(Request $request){

        $request->validate([
            'nombre' => 'required',
            'curso' => 'required',
            'nota1' => 'required',
            'nota2' => 'required'
        ]); 

        $nombre = request('nombre');
        $curso = request('curso');
        $nota1 = request('nota1');
        $nota2 = request('nota2');
        $promedio=($nota1 + $nota2)/2;

        if($promedio>=14.00){

            $condicion =1;
        }
        else{
            $condicion =0;
        }
            

        Alumno::create([
            'nombre' => $nombre,
            'curso' => $curso,
            'nota1' => $nota1,
            'nota2' => $nota2,
            'promedio' => $promedio,
            'condicion' => $condicion
        ]);

        return redirect()->route('listado.index');


    }

}
