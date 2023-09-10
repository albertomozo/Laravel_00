@extends('plantilla')
@section('title')
Miweb - Home
@endsection
@section('contenido')
@auth
<p>Usuario : {{ request()->user()->name }} </p>
@endauth
@endsection

