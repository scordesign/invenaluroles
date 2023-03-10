<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="https://img1.wsimg.com/isteam/ip/7b14240e-5fe2-4cb0-b3b5-062ff5eff41b/LOGO%20%20ALUICA%20CONSTRUCCIONES%20VERTICAL.png.png/:/rs=w:90,h:98,cg:true,m/cr=w:90,h:98/qt=q:95" />


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
            <img style="width:5%;"src="https://img1.wsimg.com/isteam/ip/7b14240e-5fe2-4cb0-b3b5-062ff5eff41b/LOGO%20%20ALUICA%20CONSTRUCCIONES%20VERTICAL.png.png/:/rs=w:90,h:98,cg:true,m/cr=w:90,h:98/qt=q:95"></img>

                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->

                    <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                          @role('admin')
                            <a class="nav-link" href="{{ route('users.index') }}">
                                {{ __('Usuarios') }}
                            </a></li>@endrole
                            @role('admin')
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('excel') }}">
                                {{ __('Excel') }}
                            </a></li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('bodegas.index') }}">
                                {{ __('Bodegas') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('grupos.index') }}">
                                {{ __('Grupos') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('codigos.index') }}">
                                {{ __('Productos') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('parejas.index') }}">
                                {{ __('Pareja Conteo 1') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('parejaones.index') }}">
                                {{ __('Pareja Conteo 2') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('unidades.index') }}">
                                {{ __('Unidades') }}
                            </a></li>
                            <li class="nav-item">
                            <a class="nav-link" href="{{ route('ubicaciones.index') }}">
                                {{ __('Ubicaciones') }}
                            </a></li>@endrole
                            <li class="nav-item">
                            <a class="nav-link" style="color:rgb(87, 164, 45);    font-size: larger;
    font-weight: bold; " href="{{ route('productos.index') }}">
                                {{ __('Registro Conteo de Inventario') }}
                            </a></li>
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Ingresar') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Registrar') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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
