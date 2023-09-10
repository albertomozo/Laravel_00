@extends('plantilla')
@section('title','Proyectos')
@section('contenido')
<h1>Proyecto</h1>
@forelse ($proyectos as $proyecto)
    <p>Titulo: {{ $proyecto->title  }} |  {{ $proyecto->created_at->diffForHumans()  }} </p>
     
@empty    

@endforelse


@endsection

