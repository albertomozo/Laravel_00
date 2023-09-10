@extends('plantilla')
@section('title','Mi web - Contact')
@endsection
@section('contenido')
<form   method="POST"  action="" >   
    @csrf         
    <h1 >@lang('Contact')</h1>
    <hr>
    {{ $errors }}
    <label for="name">Nombre</label><br>
    <input  id="name" name="name"  placeholder="Escribe aquí tu nombre..." ><br>
    <label for="email">Correo electrónico</label><br>
    <input  type="text" name="email" placeholder="Escribe aquí tu e-mail..."><br>
    <label for="subject">Asunto</label><br>
    <input  id="subject"   name="subject" placeholder="Escribe aquí el asunto de tu mensaje..."><br>                 
    <textarea  id="content" name="conent"  placeholder="Escribe aquí el contenido de tu mensaje..."></textarea><br>                 
    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
</form>

@endsection

