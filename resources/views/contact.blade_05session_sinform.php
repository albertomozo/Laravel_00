@extends('plantilla')
@section('title','Mi web - Contact')
@section('contenido')

@if(session('status'))
  	{{ session('status')  }}
@else
    <form   method="POST"  action="" >   
        @csrf         
        <h1 >@lang('Contact')</h1>
        {{ $errors }}
        <hr>
        <label for="name">Nombre</label><br>
        <input  id="name" name="name"  placeholder="Escribe aquí tu nombre..." value ="{{old('name')}}"><br>
        {{ $errors->first('name') }}<br>
        <label for="email">Correo electrónico</label><br>
        <input  type="text" name="email" placeholder="Escribe aquí tu e-mail..." value ="{{old('email')}}"><br>
        <small>{{ $errors->first('email',':message') }}</small><br> 
        {!! $errors->first('email','<small>:message</small>') !!}<br>
        <label for="subject">Asunto</label><br>
        {!! $errors->first('subject','<small style="color:red">:message</small><br>') !!}
        <input  id="subject"   name="subject" placeholder="Escribe aquí el asunto de tu mensaje..." value ="{{old('subject')}}">  
        <label for="content">Contenido</label><br>
        <p>{!! $errors->first('content','<small style="color:red">:message</small>') !!}</p>               
        <textarea  id="content" name="content"  placeholder="Escribe aquí el contenido de tu mensaje...">{{old('content')}}</textarea><br>                 
        <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
    </form>
@endif
@endsection

