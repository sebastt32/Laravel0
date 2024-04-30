@extends('layouts.plantilla')

@section('title','cursos ' . $curso->name)
    
@section('content')
    {{-- el {{$curso}} remplaza la necesidad de escribir codigo php --}}
    <h1>Bienvenido al curso: {{$curso->name}} </h1>
    <a href="{{route('cursos.index')}}">Volver a cursos</a>
    <p><strong>Categoria: </strong>{{$curso->categoria}}</p>
    <p>{{$curso->descripcion}}</p>
@endsection


