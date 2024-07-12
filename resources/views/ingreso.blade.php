@extends('layout')

@section('title', 'Ingreso')

@section('content')

    <table cellpadding="3" cellspaceing="5">
        <tr>
            <th colspan="4">INGRESAR ALUMNO</th>
        </tr>
        {{-- @if ($errors->any())
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif --}}
        <form action="{{ route('ingreso.store') }}" method="post">
            @csrf
            <tr>
                <th>NOMBRE</th>
                <td><input type="text" name="nombre"></td>
                @error('nombre')
                    <br><span>El campo nombre es obligatorio</span><br>
                @enderror
            </tr>
            <tr>
                <th>CURSO</th>
                <td><input type="text" name="curso"></td>
                @error('curso')
                    <br><span>El campo Curso es obligatorio</span><br>
                @enderror
            </tr>
            <tr>
                <th>NOTA1</th>
                <td><input type="number" step="0.01" min="0" max="20" name="nota1"></td>
                @error('nota1')
                    <br><span>El campo nota1 es obligatorio</span><br>
                @enderror
            </tr>
            <tr>
                <th>NOTA1</th>
                <td><input type="number" step="0.01" min="0" max="20" name="nota2"></td>
                @error('nota2')
                    <br><span>El campo nota2 es obligatorio</span><br>
                @enderror
            </tr>
            <tr>
                <td colspan="2" align="center"><button>Guardar</button></td>
            </tr>
        </form>
    </table>

@endsection
