<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
</head>
<body>
    <!-- header -->
    <div style="background-color: #999999; width:100%; padding:10px;">
        <ul>
            <li><a href="{{route('cursos.index')}}">Home</a></li>
            <li>contact</li>
            <li>about us</li>

        </ul>
    </div>
    <!-- nav -->
    @yield('content')
    <!-- footer -->
    <!-- script -->
</body>
</html>