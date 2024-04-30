@extends('layouts.plantilla')

@section('title','cursos ' . $curso . $categoria)
    
@section('content')
    <h1>Bienvenidos al curso de {{$curso}} de la categoria {{$categoria}} </h1>
@endsection



