<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Alumno;

class alumnoSeeder extends Seeder
{
    
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $alumnos = [
            [
            'nombre' => 'Deyvi Villegas',
            'curso' => 'PEVICO',
            'nota1' => 18.30,
            'nota2' => 17.56,
            'promedio' => 17.93,
            'condicion' => '1'
            ],
            [
                'nombre' => 'Orinson Carranza',
                'curso' => 'PEVICO',
                'nota1' => 15.30,
                'nota2' => 14.56,
                'promedio' => 14.93,
                'condicion' => '1'
            ],
            [
                'nombre' => 'Piero Chiquez',
                'curso' => 'PEVICO',
                'nota1' => 10.14,
                'nota2' => 12.65,
                'promedio' => 11.40,
                'condicion' => '0'
            ]
        ];
        // Insertar los registros en la base de datos
        Alumno::insert($alumnos);
            
    }
}
