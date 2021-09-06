<header>
    <h1>AngelDev</h1>
    {{-- de esta forma se crea un efecto donde permita darle estilos diferente al link del enlace de la ruta donde nos encontremos hovear --}}
    <nav>
        <ul>
            <li><a href="{{route('home')}}" class="{{request()->routeIs('home') ? 'active' : ''}}">Home</a></li>
                {{-- el asterisco alado de cursos.* es para decir que todo lo que contenga la palabra curso lleve el efecto  --}}
            <li><a href="{{route('cursos.index')}}" class="{{request()->routeIs('cursos.*') ? 'active' : ''}}">Cursos</a></li>
                
            <li><a href="{{route('nosotros')}}" class="{{request()->routeIs('nosotros') ? 'active' : ''}}">Nosotros</a></li>
            <li><a href="{{route('contactanos.index')}}" class="{{request()->routeIs('contactanos.*') ? 'active' : ''}}">Contactanos</a></li>
        </ul>
    </nav>
</header>

