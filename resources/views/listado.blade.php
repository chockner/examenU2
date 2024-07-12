@extends('layout')

@section('title', 'Listado')

@section('content')
<h2>Listado</h2>

@if ($listado)
    @foreach ($listado as $item)
        {{-- <li>{{$item->nombre}}</li> --}}
        <td><a href="{{route('listado.show',$item)}}">{{$item->nombre}}</a></td>
    @endforeach
@else
    <li>no existe</li>
@endif


@endsection