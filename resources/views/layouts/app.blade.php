<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div id="app">

        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="logo.png" alt="" height="50px" weight="50px">
                    {{ config('app.name', 'GinecoReport') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle  active" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos Grupales</a>
                        <div class="dropdown-menu" aria-labelledby="dropdownId">
                            <a class="dropdown-item" href="{{ url('/') }}">Para Una Instituación </a>
                            <a class="dropdown-item" href="{{ url('/') }}">Para un Profesor y sus Alumnos</a>
                            <a class="dropdown-item" href="">Planes & Tarifas Grupales</a>
                        </div>
                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  active" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Productos Individuales</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="{{ url('/') }}">Para que Profesos enseñe sus Cursos</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Para que el Alumno Estudie & Aprenda</a>
                                <a class="dropdown-item" href="">Planes & Tarifas Individuales</a>
                            </div>
                        </li>
            
                        <li class="nav-item">
                            <a class="nav-link" href="">Acerca de Nosotros</a>
                        </li>

                            <li class="nav-item">
                                <a class="nav-link" href="">Galerias</a>
                            </li>

                            <li class="nav-item  ">
                                <a class="nav-link active" href="">Contactanos</a>
                            </li>

                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif

                        @else
    
                            <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  active" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Configuracion</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="{{ url('/') }}">Tipo de Actividades</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Formatos de Archivos</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Temas</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Planes y Tarifas</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Roles de Usuario</a>
                            </div>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle  active" href="#" id="dropdownId" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Aulas</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownId">
                                <a class="dropdown-item" href="{{ url('/') }}">Cursos</a>
                                <a class="dropdown-item" href="{{ url('/') }}">Actividades</a>
                            </div>
                        </li>

                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
