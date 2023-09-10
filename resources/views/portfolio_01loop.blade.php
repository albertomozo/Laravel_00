<?php $rol='ggg' ;
$porfolios = ['Portfolio 1 ','Portfolio 2 ','Portfolio 3 ','Portfolio 4 ','Portfolio 5 ' ];

?>
@extends('plantilla')
@section('title')
Miweb - About
@endsection
@section('contenido')
<h1>Portfolio</h1>
@if ($rol == 'A')
   <p>Hola Admin</p>
@else
    <p>Hola Otro</p>
@endif

@foreach ($porfolios as $portfolio)
    <p> {{ $portfolio }}  <pre>{{ var_dump($loop); }}</pre></p>
@endforeach

@endsection

