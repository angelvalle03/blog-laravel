<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <!-- header -->
    <!-- nav -->
    {{-- se incluye el header aparte --}}
    @include('layouts.partials.header')

    @yield('content')
    <!-- footer -->
    @include('layouts.partials.footer')
    <!-- script -->
</body>
</html>