@extends('plantilla')
@section('title','Mi web - Contact')
@section('contenido')
<form   method="POST"  action="" >   
    @csrf         
    <h1 >@lang('Contact')</h1>
    <hr>
     <label for="name">Nombre</label><br>
    <input  id="name" name="name"  placeholder="Escribe aquí tu nombre..." value ="{{old('name')}}"><br>
    {{ $errors->first('name') }}<br>
    <label for="email">Correo electrónico</label><br>
    <input  type="text" name="email" placeholder="Escribe aquí tu e-mail..." value ="{{old('email')}}"><br>
    {{ $errors->first('email','<small>:message</small>') }}<br> 
    {!! $errors->first('email','<small>:message</small>') !!}<br>
    <label for="subject">Asunto</label><br>
    {!! $errors->first('subject','<small>:message</small><br>') !!}
    <input  id="subject"   name="subject" placeholder="Escribe aquí el asunto de tu mensaje..." value ="{{old('subject')}}"><br>  
    <label for="content">Contenido</label><br>
    {!! $errors->first('content','<small style="color:red">:message</small><br>') !!}               
    <textarea  id="content" name="content"  placeholder="Escribe aquí el contenido de tu mensaje...">{{old('content')}}</textarea><br>                 
    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
</form>

@endsection

