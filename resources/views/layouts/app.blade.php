<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{{ asset('img/Logo.jpg') }}}">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @if(auth()->user())
    <script>
        window.user = {
            id: {{ auth()->id() }},
            name: "{{ auth()->user()->name }}"
        };

        window.csrfToken = "{{ csrf_token() }}";
    </script>
    @endif
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/sb-admin.css') }}" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/moveto.css') }}" rel="stylesheet">
</head>
<body id="page-top">
    <!--<nav class="navbar navbar-expand navbar-dark bg-dark static-top">
      <a class="navbar-brand mr-1" href="index.html">ServerLab</a>
      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Registrarse') }}</a>
            <a class="dropdown-item" href="{{ route('arduino.getLed') }}">{{ __('Led Arduino') }}</a>
            <a class="dropdown-item" href="{{ route('arduino.moveTo') }}">{{ __('MARK-1 Arduino') }}</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesi&oacute;n
            </a>
          </div>
        </li>
      </ul>
    </nav>-->
    <!--<div id="app">
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">-->
                    <!-- Left Side Of Navbar -->
                    <!--<ul class="navbar-nav mr-auto">
                        @if(auth()->check())

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('arduino.getLed') }}">LED Arduino</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('arduino.moveTo') }}">MARK-1 Arduino</a>
                            </li>
                        @endif
                    </ul>

                    Right Side Of Navbar
                    <ul class="navbar-nav ml-auto">
                        Authentication Links
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">
                                    <i class="fas fa-sign-in-alt"></i> {{ __('Ingresar') }}
                                </a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">{{ __('Registrarse') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    <i class="fas fa-user-circle"></i>
                                    <span class="text-capitalize">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesi&oacute;n
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div>-->
<nav class="navbar navbar-expand navbar-dark static-top" style="background:#0b3483">
      <a class="navbar-brand mr-1" href="{{url('/')}}">
      {{ config('app.name', 'Laravel') }}
      </a>
     <img src="{{url('img/logo.jpg')}}" class="logo">

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>
      <ul class="navbar-nav ml-auto mr-md-0">
        <li class="nav-item dropdown no-arrow ml-auto mr-0 mr-md-3 my-2 my-md-0 pull-right">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="{{ route('arduino.changePassword') }}">Cambiar contraseña</a>
            <!--<a class="dropdown-item" href="#">Activity Log</a>
            <div class="dropdown-divider"></div>-->
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Cerrar Sesi&oacute;n</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav" style="background:#a6192e;">
        <li class="nav-item active">
          <a class="nav-link" href="{{ url('/') }}">
            <i class="fa fa-home"></i>
            <span>Home</span>
          </a>
        </li>
        <!--<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Administradores</span>
          </a>
          <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="#"></a>
            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Agregar Usuario') }}</a>
            <div class="dropdown-divider"></div>

            <a class="dropdown-item" href="404.html">404 Page</a>
            <a class="dropdown-item" href="blank.html">Blank Page</a>
          </div>
        </li>-->
        @if(auth()->user()->role == "Administrador")
        <li class="nav-item">
          <a class="nav-link" href="{{route('arduino.admins')}}">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Registro Usuarios</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link"href="{{ route('register') }}">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Agregar Usuario</span></a>
        </li>
        @endif
        <li class="nav-item">
          <a class="nav-link" href="{{ route('arduino.moveTo') }}">
            <i class="fas fa-robot" aria-hidden="true"></i>
            <span>MARK-1 Arduino</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('arduino.moveTo2') }}">
            <i class="fas fa-robot" aria-hidden="true"></i>
            <span>MARK-2 Arduino</span></a>
        </li>
        @if(auth()->user()->role == "Administrador" or auth()->user()->role == "Instructor")
        <li class="nav-item">
          <a class="nav-link" href="{{ route('arduino.robots') }}">
            <i class="fas fa-robot" aria-hidden="true"></i>
            <span>Robots</span></a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="{{ route('arduino.addRobot') }}">
            <i class="fas fa-robot" aria-hidden="true"></i>
            <span>Agregar Robot</span></a>
        </li>
        @endif
      </ul>
      <div id="content-wrapper">
        <div class="container-fluid">
            @yield('content')
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © ServerLab UNAB 2018</span>
            </div>
          </div>
        </footer>
      </div>
      <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">¿Listo para salir?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Presione "Cerrar Sesión" a continuación si está listo para terminar su sesión actual</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancelar</button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          <a class="btn btn-primary" href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Cerrar Sesi&oacute;n
            </a>
          </div>
        </div>
      </div>
    </div>
  {{--   <script src="{{ asset('js/jquery.min.js') }}" defer></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}" defer></script> --}}
    <script src="{{ asset('js/jquery.easing.min.js') }}" defer></script>
    <script src="{{ asset('js/sb-admin.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('js/moveto.js') }}" defer></script>
</body>
</html>
