@extends('plantilla')
@section('title','Proyectos ' . $project->title )
@section('contenido')
<h1>Proyecto  : {{ $project->title }} </h1>
<p>
{{ $project->description }}
</p>
<p>
 Creado :  {{ $project->created_at->diffForHumans() }}
</p>
@endsection

