@extends('plantilla')
@section('title','Proyectos')
@section('contenido')
<h1>Proyecto</h1>
@auth
<p><a  href="{{ route('portfolio.create') }}" >Crear proyecto</a>
@endauth
@forelse ($proyectos as $proyecto)
    <p><a href="{{ route('proyecto.show',$proyecto)}}">{{ $proyecto->title  }}</a> </p>
     
@empty    
    <p>No hay Proyectos</p>
@endforelse
{{ $proyectos->links() }}

@endsection

