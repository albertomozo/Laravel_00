@extends('plantilla')
@section('title','Proyectos')
@section('contenido')
<h1>Proyecto</h1>
@forelse ($proyectos as $proyecto)
    <p><a href="{{ route('proyecto.show',$proyecto)}}">{{ $proyecto->title  }}</a> </p>
     
@empty    
    <p>No hay Proyectos</p>
@endforelse
{{ $proyectos->links() }}

@endsection

