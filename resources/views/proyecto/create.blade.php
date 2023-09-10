@extends('plantilla')
@section('title','Proyectos ' )
@section('contenido')
<h1>Nuevo Proyecto</h1>
<form name="form1" method="POST" action="">
    @csrf
    <label for="title">Titulo</label><br>
    <input type="text" name="title" id="title" placeholder="Titulo del proyecto"><br>
    <label for="url">Url</label><br>
    <input type="text" name="url" id="url" placeholder="url amigable  del proyecto"><br>
    <label for="description">Descripción :</label><br> 
    <textarea  id="description" name="description"  placeholder="Escribe aquí el contenido delproyecto"></textarea><br>                 
    <button type="submit">@lang('Send')</button><br>
</form>
@endsection

