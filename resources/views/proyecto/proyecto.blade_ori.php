@extends('plantilla')
@section('title','Proyectos')
@section('contenido')
<h1>Proyecto</h1>
@foreach ($proyectos as $proyecto)
    <p>Titulo: {{ $proyecto->title  }}   
    </p>
@endforeach


@endsection

