<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    
  
    <style>
        .active {
            color:red;
            text-decoration: none;
        }
    </style>
    <title>@yield('title')</title>
</head>
<body>
    @include('partials/nav')

    @yield('contenido')
    @include('partials/pie')
</body>
</html>