
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Dulce Violeta</title>


    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick.css')}}">
    <link rel="stylesheet" href="{{asset('css/LineIcons.css')}}">
    <link rel="stylesheet" href="{{asset('css/default.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Pacifico&display=swap" rel="stylesheet">

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    <script src="./css/app.js"></script>
</head>

<div class="preloader">
    <div class="spin">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<body>

    <header class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">
                        <a class="navbar-brand" href="index">
                            <img class="logo" src="/images/logo.png" alt="Logo" width="100px" height="100px">
                            <h1 class="dulce">Dulce Violeta</h1>
                        </a>
                        <!-- Logo -->
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                            <span class="bar-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul id="nav" class="navbar-nav ml-auto">
                                <li class="nav-item active">
                                    <a data-scroll-nav="0" href="/">Inicio</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="productos">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="ofertas">Ofertas</a>
                                </li>
                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="sobrenosotros">Sobre Nosotros</a>
                                </li>

                                <li class="nav-item">
                                    <a data-scroll-nav="0" href="danostuopinion">Dejanos tu opinión</a>
                                </li>
                            </ul>
                            <!-- navbar nav -->
                        </div>
                    </nav>
                    <!-- navbar -->
                </div>
            </div>
            <!-- row -->
        </div>
        <!-- container -->
    </header>
    
    <div class="btn-whatsapp ">
        <a href="https://api.whatsapp.com/send?phone=541125363802" target="_blank ">
            <img src="http://s2.accesoperu.com/logos/btn_whatsapp.png " alt=" ">
        </a>
    </div>

    <a href="# " class="back-to-top "><i class="lni-chevron-up "></i></a>
    <script src="{{asset('js/vendor/modernizr-3.6.0.min.js')}} "></script>
    <script src="{{asset('js/vendor/jquery-1.12.4.min.js ')}}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>


    <!--====== Slick js ======-->
    <script src="{{asset('js/slick.min.js')}}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{asset('js/jquery.magnific-popup.min.js')}} "></script>


    <!--====== nav js ======-->
    <script src="{{asset('js/jquery.nav.js')}} "></script>

    <!--====== Nice Number js ======-->
    <script src="{{asset('js/jquery.nice-number.min.js ')}}"></script>

    <!--====== Main js ======-->
    <script src="{{asset('js/main.js')}}"></script>

</body>

</html>