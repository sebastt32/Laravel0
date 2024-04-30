@extends('layouts.plantilla')

@section('title','cursos ' . $curso)
    
@section('content')
    {{-- el {{$curso}} remplaza la necesidad de escribir codigo php --}}
    <h1>Bienvenido al curso: {{$curso}} </h1>
@endsection


