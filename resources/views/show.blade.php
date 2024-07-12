@extends('layout')

@section('title', 'Alumno | ' . $listado->nombre)

@section('content')

    <tr>
        <td colspan="4">{{ $listado->nombre }}</td>
    </tr>
    <tr>
        <td aria-colindex="4">{{ $listado->curso }}</td>
    </tr>
    <tr>
        <td aria-colindex="4">{{ $listado->nota1 }}</td>
    </tr>
    <tr>
        <td aria-colindex="4">{{ $listado->nota2 }}</td>
    </tr>
    <tr>
        <td aria-colindex="4">{{ $listado->promedio }}</td>
    </tr>
    <tr>
        <td aria-colindex="4">
            @if ($listado->condicion)
        <td colspan="4">Aprovado </td>
    @else
        <td colspan="4">Desaprovado </td>
        @endif
    </tr>
    <tr>
        <td aria-colindex="4">{{ $listado->create_at }}</td>
    </tr>
@endsection
