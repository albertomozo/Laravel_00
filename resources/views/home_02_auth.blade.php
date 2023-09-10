@extends('plantilla')
@section('title')
Miweb - Home
@endsection
@section('contenido')
@auth
    <p>Usuario : {{ request()->user()->name }} </p>
@endauth
@if(auth()->guest())
    // The user is not authenticated.
@else
    <p>auth : {{ auth()->user()->name }} </p>
@endif
@endsection

