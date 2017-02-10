<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

 
    
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/tablas.css') }}">
    <link href="{{ url('public/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ url('public/tcal.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/css/style1.css') }}" />
    <!--navegacion efectos-->
    <link rel="stylesheet" type="text/css" href="{{ url('public/CircularNavigation/css/demo.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/CircularNavigation/css/common.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ url('public/CircularNavigation/css/style.css') }}" />
    <script type="text/javascript" src="{{ url('public/CircularNavigation/js/modernizr.custom.79639.js') }}"></script> 
    <!--navegacion efectos-->

    <!-- Scripts Interno Token -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>



                <!--@if(Request::url() == 'http://168.176.182.79:8280/bupalweb/home1')
                    <a class="navbar-brand linkapp" href="{{ url('/home1') }}">Sistema de Bienestar Universitario - UNAL Palmira</a>
                @elseif(Request::url() == 'http://168.176.182.79:8280/bupalweb/home')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/home/create') }}">Nuevo Oficio P.DBNU</a>
                @elseif(Request::url() == 'http://168.176.182.79:8280/bupalweb/home/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/home') }}">Listar Registros</a>
                @elseif(Request::url() == 'http://168.176.182.79:8280/bupalweb/cultura')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/cultura/create') }}">Nuevo Oficio P.SCUL</a>                    
                @elseif(Request::url() == 'http://168.176.182.79:8280/bupalweb/cultura/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/cultura') }}">Listar Registros</a>
                @endif-->


                @if(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/home1' or Request::url() == 'http://168.176.180.243:8080/bupalweb/home1')
                    <a class="navbar-brand linkapp" href="{{ url('/home1') }}">Sistema de Bienestar Universitario - UNAL Palmira</a>
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/home' or Request::url() == 'http://168.176.180.243:8080/bupalweb/home')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/home/create') }}">Nuevo Oficio P.DBU</a>
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/home/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/home/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/home') }}">Listar Registros</a>


                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/cultura' or Request::url() == 'http://168.176.180.243:8080/bupalweb/cultura')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/cultura/create') }}">Nuevo Oficio P.SCUL</a>             
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/cultura/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/cultura/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/cultura') }}">Listar Registros</a>


                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/deporte' or Request::url() == 'http://168.176.180.243:8080/bupalweb/deporte')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/deporte/create') }}">Nuevo Oficio P.SAFD</a>             
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/deporte/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/deporte/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/deporte') }}">Listar Registros</a>


                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/salud' or Request::url() == 'http://168.176.180.243:8080/bupalweb/salud')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/salud/create') }}">Nuevo Oficio P.SUS</a>             
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/salud/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/salud/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/salud') }}">Listar Registros</a>


                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/aintegral' or Request::url() == 'http://168.176.180.243:8080/bupalweb/aintegral')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/aintegral/create') }}">Nuevo Oficio P.SAI</a>           
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/aintegral/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/aintegral/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/aintegral') }}">Listar Registros</a>


                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/gestion' or Request::url() == 'http://168.176.180.243:8080/bupalweb/gestion')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/gestion/create') }}">Nuevo Oficio P.SGFS</a>             
                @elseif(Request::url() == 'http://www.bupalweb.unal.edu.co:8080/gestion/create' or Request::url() == 'http://168.176.180.243:8080/bupalweb/create')
                    <a class="navbar-brand" href="{{ url('/home1') }}">Menú Principal</a>
                    <a class="navbar-brand" href="{{ url('/gestion') }}">Listar Registros</a>


                @endif

                
                
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Iniciar Sesión</a></li>
                        <li><a href="{{ url('/register') }}">Registrar</a></li>
                    @else


                    
                        

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>


                            <ul class="dropdown-menu" role="menu">
                                <li>
                                    <a href="{{ url('/logout') }}"
                                        onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                        Cerrar Sesión
                                    </a>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </li>
                            </ul>
                        </li>

                    @endif
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <!-- Scripts -->
    <script src="{{ url('public/js/app.js') }}"></script>
    <script type="text/javascript" src="{{ url('public/tcal.js') }}"></script> 
    <script type="text/javascript" src="{{ url('public/js/modernizr.custom.86080.js') }}"></script>

</body>
</html>
