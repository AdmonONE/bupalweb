<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

        <title>Sistema de Bienestar Universitario</title>

        <!-- Fonts -->
        <link href="{{ url('public/fonts/google.css') }}" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{ url('public/cssslider_files/csss_engine1/style.css') }}">

        <link href="{{ url('public/css/bootstrap.css') }}" rel="stylesheet">

        <link href="{{ url('public/fonts/google1.css') }}" rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="{{ url('public/css/reset.css') }}"> <!-- CSS reset -->
    <link rel="stylesheet" href="{{ url('public/css/style.css') }}"> <!-- Gem style -->
    <script src="{{ url('public/js/modernizr.js') }}"></script> <!-- Modernizr -->

    <!--unal-->
        <link rel="shortcut icon" href="{{ url('images/favicon.ico') }}" type="image/x-icon">


    <meta name="revisit-after" content="1 hour">
    <meta name="distribution" content="all">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=0.5, maximum-scale=2.5, user-scalable=yes">
    <meta name="expires" content="1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="all">


    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/bootstrap.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/bootstrap-theme.min.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/reset.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/unal.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/base.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/tablet.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/phone.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/small.css') }}" media="all">
    <link rel="stylesheet" type="text/css" href="{{ url('public/unal/css/printer.css') }}" media="print">


    <script src="{{ url('public/unal/js/jquery.js') }}" type="text/javascript"></script>
    <script src="{{ url('public/unal/js/unal.js') }}" type="text/javascript"></script>
    <!--fin unal-->

        <!-- Styles -->
        <style>
            html, body {
                /*background-color: yellow;
                background-image: url("/img/FONDO-11 _ 16-9 _ 1366px - 768px.jpg");
                color: #636b6f;*/
                font-family: Ancizar Sans;

                /*font-family: 'Raleway', sans-serif;*/
                font-weight: 100;
                height: 100vh;
                margin: 0;
                background-image: url('public/unal/images/fondossesquiv3/1366px768px/FONDO11.jpg');

            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 45px;

            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .aintegral {
                position: absolute;
                left: 3%;
                top: 25%;
            }

            .cultura {
                position: absolute;
                left: 25%;
                top: 25%;
            }

            .deportes {
                position: absolute;
                left: 35%;
                top: 25%;
            }

            .gestion {
                position: absolute;
                left: 58%;
                top: 25%;
            }

            .salud {
                position: absolute;
                left: 85%;
                top: 25%;
            }


.div-img {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
.div-img .img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 100%;
  transform: scale(1);
  -ms-transform: scale(1);
  -moz-transform: scale(1);
  -webkit-transform: scale(1);
  -o-transform: scale(1);
  -webkit-transition: all 500ms ease-in-out;
  -moz-transition: all 500ms ease-in-out;
  -ms-transition: all 500ms ease-in-out;
  -o-transition: all 500ms ease-in-out;
}
.div-img:hover .img {
  transform: scale(0.8);
  -ms-transform: scale(0.8);
  -moz-transform: scale(0.8);
  -webkit-transform: scale(0.8);
  -o-transform: scale(0.8);
  -webkit-border-radius: 10px;
  -moz-border-radius: 10px;
  border-radius: 10px;
}

.btn-inisesion {
    font-weight: bold;
  color: #fff;
  background-color: #058aa9;
  border-color: white;
    padding: 10px 16px;
  font-size: 14px;
  line-height: 1.3333333;
  border-radius: 6px;
  width: 100%;
}

.main-nav .cd-signin{
    background-color: #058aa9;
    font-weight: bold;
}

#services{
    font-family: Ancizar Sans;

}





.container {
    margin-top: 0px;
    width: 98%;
}


.carousel-inner img {
    width: 100%;
    max-height: 460px
}

.carousel-control {
    width: 0;
}

.carousel-control.left,
.carousel-control.right {
    opacity: 1;
    filter: alpha(opacity=100);
    background-image: none;
    background-repeat: no-repeat;
    text-shadow: none;
}

.carousel-control.left span {
    padding: 1px;
}

.carousel-control.right span {
    padding: 1px;
}

.carousel-control .glyphicon-chevron-left, 
.carousel-control .glyphicon-chevron-right, 
.carousel-control .icon-prev, 
.carousel-control .icon-next {
    position: absolute;
    top: 45%;
    z-index: 5;
    display: inline-block;
}

.carousel-control .glyphicon-chevron-left,
.carousel-control .icon-prev {
    left: 0;
}

.carousel-control .glyphicon-chevron-right,
.carousel-control .icon-next {
    right: 0;
}

.carousel-control.left span,
.carousel-control.right span {
    background-color: #000;
}

.carousel-control.left span:hover,
.carousel-control.right span:hover {
    opacity: .7;
    filter: alpha(opacity=70);
}

/* Carousel Header Styles */
.header-text {
    position: absolute;
    top: 20%;
    left: 1.8%;
    right: auto;
    width: 96.66666666666666%;
    color: #fff;
}

.header-text h2 {
    font-size: 40px;
}

.header-text h2 span {
    background-color: #2980b9;
    padding: 10px;
}

.header-text h3 span {
    background-color: #000;
    padding: 15px;
}

.btn-min-block {
    min-width: 170px;
    line-height: 26px;
}

.btn-theme {
    color: #fff;
    background-color: transparent;
    border: 2px solid #fff;
    margin-right: 15px;
}

.btn-theme:hover {
    color: #000;
    background-color: #fff;
    border-color: #fff;
}




        </style>
    </head>

<body>


<script> 
function pulsar(e) { 
  tecla = (document.all) ? e.keyCode :e.which; 
  return (tecla!=13); 
} 
</script> 

<!--div servicios unal-->
<div id="services">
        <div class="indicator hidden-xs"></div>
        <ul class="dropdown-menu">
            <li>
                <a href="http://correo.unal.edu.co" target="_blank"><img src="{{ url('public/unal/images/icnServEmail.png') }}" width="32" height="32" alt="Correo Electrónico">Correo Electrónico</a>
            </li>
            <li>
                <a href="http://www.sia.unal.edu.co" target="_blank"><img src="{{ url('public/unal/images/icnServSia.png') }}" width="32" height="32" alt="Sistema de Información Académica">SIA Palmira</a>
            </li>
            <li>
                <a href="http://www.sinab.unal.edu.co" target="_blank"><img src="{{ url('public/unal/images/icnServLibrary.png') }}" width="32" height="32" alt="Biblioteca">Biblioteca</a>
            </li>
            <li>
                <a href="http://168.176.5.43:8082/Convocatorias/indice.iface" target="_blank"><img src="{{ url('public/unal/images/icnServCall.png') }}" width="32" height="32" alt="Convocatorias">Convocatorias</a>
            </li>
            <li>
                <a href="http://identidad.unal.edu.co"><img src="{{ url('public/unal/images/icnServIdentidad.png') }}" width="32" height="32" alt="Identidad U.N.">Identidad U.N.</a>
            </li>

            <nav class="main-nav">
                <!-- inser more links here -->
                <li>
                    <a class="cd-signin" href="#0"><img src="{{ url('public/unal/images/bienestar.png') }}">Iniciar Sesión</a>
                </li>
               <!--<li><a class="cd-signup" href="#0">Sign up</a></li>-->
            </nav>
        </ul>
    </div>
<!--fin div servicios unal-->



<!--header login
<header role="banner">



        <div id="cd-logo"><a href="#0"><img src="img/cd-logo.svg" alt="Logo"></a></div>

        <nav class="main-nav">
            <ul>

                inser more links here 
                <li><a class="cd-signin" href="#0">Iniciar Sesión</a></li>
                <li><a class="cd-signup" href="#0">Sign up</a></li>
                
            </ul>
        </nav>
</header>
fin-->

<!--header unal-->
    <header id="unalTop">
        <div class="logo">
            <a href="http://unal.edu.co">
                <!--[if (gte IE 9)|!(IE)]><!-->
                <svg width="93%" height="93%">
          <image xlink:href="{{ url('public/unal/images/escudoUnal.svg') }}" width="100%" height="100%" class="hidden-print"/>
        </svg>

                <!--<![endif]-->
                <!--[if lt IE 9]>
          <img src="images/escudoUnal.png" width="93%" height="auto" class="hidden-print"/> 
      <![endif]-->
                <img src="{{ url('public/unal/images/escudoUnal_black.png') }}" class="visible-print" />
            </a>
        </div>
        <div class="seal">
            <img class="hidden-print" alt="Escudo de la República de Colombia" src="{{ url('public/unal/images/sealColombia.png') }}" width="66" height="66" />

            <img class="visible-print" alt="Escudo de la República de Colombia" src="{{ url('public/unal/images/sealColombia_black.png') }}" width="66" height="66" />
        </div>
        <div class="firstMenu">

            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
      <span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
    </button>
            <div class="btn-group languageMenu hidden-xs">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">es<span class="caret"></span></div>
                <ul class="dropdown-menu">
                    <li><a href="index.html#">es</a></li>
                    <li><a href="index.html#">en</a></li>
                </ul>
            </div>
            <ul class="socialLinks hidden-xs">
                <li>
                    <a href="https://www.facebook.com/UNColombia" target="_blank" class="facebook" title="Página oficial en Facebook"></a>
                </li>
                <li>
                    <a href="https://twitter.com/UNColombia" target="_blank" class="twitter" title="Cuenta oficial en Twitter"></a>
                </li>
                <li>
                    <a href="https://www.youtube.com/channel/UCnE6Zj2llVxcvL5I38B0Ceg" target="_blank" class="youtube" title="Canal oficial de Youtube"></a>
                </li>
                <li>
                    <a href="http://agenciadenoticias.unal.edu.co/nc/sus/type/rss2.html" target="_blank" class="rss" title="Suscripción a canales de información RSS"></a>
                </li>
            </ul>
            <div class="navbar-default">
                <nav id="profiles">
                    <ul class="nav navbar-nav dropdown-menu">
                        <li class="item_Aspirantes #>"><a href="index.html#">Aspirantes</a></li>
                        <li class="item_Estudiantes #>"><a href="index.html#">Estudiantes</a></li>
                        <li class="item_Egresados #>"><a href="index.html#">Egresados</a></li>
                        <li class="item_Docentes #>"><a href="index.html#">Docentes</a></li>
                        <li class="item_Administrativos #>"><a href="index.html#">Administrativos</a></li>
                    </ul>
                </nav>
            </div>
        </div>
        <div id="bs-navbar" class="navbar-collapse collapse navigation">
            <div class="site-url">


        <a href="http://subdominio.unal.edu.co/">Sistema de Bienestar Universitario</a>
            
                
            </div>


            <div class="buscador">
                <div class="gcse-searchbox-only" data-resultsUrl="http://unal.edu.co/resultados-de-la-busqueda/" data-newWindow="true"></div>
            </div>

            <div class="mainMenu">
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/direccion.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/aintegral.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/salud.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/cultura.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/socieconomico.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group div-img"><a href="index.html#" class="btn btn-default dropdown-toggle"><img class="img" src="{{ url('public/img/deportes.png') }}"></a><span class="caret-right"></span></div>
                
                <div class="btn-group">
                    <div class="btn btn-default dropdown-toggle" data-toggle="dropdown">Sedes<span class="caret"></span></div>
                    <ul class="dropdown-menu dropItem-16">
                        <li><a href="http://www.imani.unal.edu.co" target="_blank">Amazonia</a><span class="caret-right"></span></li>
                        <li><a href="http://www.bogota.unal.edu.co" target="_blank">Bogotá</a><span class="caret-right"></span></li>
                        <li><a href="http://www.caribe.unal.edu.co" target="_blank">Caribe</a><span class="caret-right"></span></li>
                        <li><a href="http://www.manizales.unal.edu.co" target="_blank">Manizales</a><span class="caret-right"></span></li>
                        <li><a href="http://www.medellin.unal.edu.co" target="_blank">Medellín</a><span class="caret-right"></span></li>
                        <li><a href="http://www.orinoquia.unal.edu.co" target="_blank">Orinoquia</a><span class="caret-right"></span></li>
                        <li><a href="http://www.palmira.unal.edu.co" target="_blank">Palmira</a><span class="caret-right"></span></li>
                        <li><a href="http://www.tumaco-pacifico.unal.edu.co" target="_blank">Tumaco</a><span class="caret-right"></span></li>
                    </ul>
                </div>
            </div>
            <div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuServicios" data-target="#services">Servicios<span class="caret"> </span>
                </div>
            </div>
            <div class="btn-group hidden-sm hidden-md hidden-lg hidden-print">
                <div class="btn btn-default dropdown-toggle" data-toggle="dropdown" id="unalOpenMenuPerfiles" data-target="#profiles">Perfiles<span class="caret"> </span>
                </div>
            </div>
        </div>

    </header>
<!--fin header unal-->

        
    <div class="cd-user-modal"> <!-- this is the entire modal form, including the background -->
        <div class="cd-user-modal-container"> <!-- this is the container wrapper -->
            <ul class="cd-switcher">
            @if (Route::has('login'))
            
                <!--<li><a href="#0">Iniciar Sesión</a></li>-->
                <!--<li><a href="#0">New account</a></li>-->
            @endif
            </ul>

            <div id="cd-login"> <!-- log in form -->
                <form class="cd-form" method="POST" role="form" action="{{ url('/login') }}">
                    {{ csrf_field() }}
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signin-email">E-mail</label>
                        <!--<input class="full-width has-padding has-border" id="signin-email" type="email" placeholder="E-mail">-->
                        <input class="full-width has-padding has-border" id="email" type="email" name="email" value="{{ old('email') }}" placeholder="E-mail" required onkeypress="return pulsar(event)">
                    
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signin-password">Password</label>
                        <!--<input class="full-width has-padding has-border" id="signin-password" type="text"  placeholder="Password">-->
                        <input class="full-width has-padding has-border" id="password" type="password" name="password" placeholder="Contraseña" required onkeypress="return pulsar(event)">
                        <a href="#0" class="hide-password">Hide</a>
                        
                    </p>

                    <!--<p class="fieldset">
                        <input type="checkbox" id="remember-me" checked>
                        <label for="remember-me">Recordar mis datos</label>
                    </p>-->

                    <p class="fieldset">
                        <button class="btn-inisesion" type="submit">
                                    Ingresar
                        </button>
                    </p>

                    <!--<p class=""><a href="#0">¿Olvidó su contraseña?</a></p>-->
                </form>
                
                
                <!-- <a href="#0" class="cd-close-form">Close</a> -->
            </div> <!-- cd-login -->

            <!--<div id="cd-signup"> sign up form 
                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-username" for="signup-username">Username</label>
                        <input class="full-width has-padding has-border" id="signup-username" type="text" placeholder="Username">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-email" for="signup-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="signup-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <label class="image-replace cd-password" for="signup-password">Password</label>
                        <input class="full-width has-padding has-border" id="signup-password" type="text"  placeholder="Password">
                        <a href="#0" class="hide-password">Hide</a>
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input type="checkbox" id="accept-terms">
                        <label for="accept-terms">I agree to the <a href="#0">Terms</a></label>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Create account">
                    </p>
                </form>

                 <a href="#0" class="cd-close-form">Close</a> 
            </div> cd-signup -->

            <div id="cd-reset-password"> <!-- reset password form -->
                <p class="cd-form-message">Lost your password? Please enter your email address. You will receive a link to create a new password.</p>

                <form class="cd-form">
                    <p class="fieldset">
                        <label class="image-replace cd-email" for="reset-email">E-mail</label>
                        <input class="full-width has-padding has-border" id="reset-email" type="email" placeholder="E-mail">
                        <span class="cd-error-message">Error message here!</span>
                    </p>

                    <p class="fieldset">
                        <input class="full-width has-padding" type="submit" value="Reset password">
                    </p>
                </form>

                <p class="cd-form-bottom-message"><a href="#0">Back to log-in</a></p>
            </div> <!-- cd-reset-password -->
            <a href="#0" class="cd-close-form">Close</a>
        </div> <!-- cd-user-modal-container -->
    </div> <!-- cd-user-modal -->



        <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    <a href="{{ url('/login') }}">Iniciar Sesión</a>
                    <a href="{{ url('/register') }}">Registrar</a>
                </div>
            @endif
        -->



        <!-- End cssSlider.com -->


            <div class="content">
                <!--<div class="title m-b-md">
                    Sistema de Bienestar Universitario - UN Palmira
                </div>-->

                <!--<div class="links">-->
                <!--
                <div class="aintegral">  <div class="div-img" >    <a href="#"><img class="img" src="http://168.176.182.79:8280/bupalweb/public/img/aintegral.png" title="" alt="Foto3"></a>  </div></div>

                <div class="cultura">  <div class="div-img" >    <a href="#"><img class="img" src="http://168.176.182.79:8280/bupalweb/public/img/cultura.png" title="" alt="Foto3"></a>  </div></div>

                <div class="deportes">  <div class="div-img" >    <a href="#"><img class="img" src="http://168.176.182.79:8280/bupalweb/public/img/deportes.png" title="" alt="Foto3"></a>  </div></div>

                <div class="gestion">  <div class="div-img" >    <a href="#"><img class="img" src="http://168.176.182.79:8280/bupalweb/public/img/socieconomico.png" title="" alt="Foto3"></a>  </div></div>

                <div class="salud">  <div class="div-img" >    <a href="#"><img class="img" src="http://168.176.182.79:8280/bupalweb/public/img/salud.png" title="Foto3" alt=""></a>  </div></div>
                -->

                <!--<a href="#">Actividad Física y Deportiva</a>
                    <a href="#">Cultura</a>
                    
                    <a href="#">Actividad Física y Deportiva</a>
                    <a href="#">Gestión y Fomento Socioeconómica</a>
                    <a href="#">Salud Estudiantil</a>
                </div>-->


                <br>
                <br>

        
        <!--Inicio Slider
        
        <link rel="stylesheet" href="{{ url('public/cssslider_files/csss_engine1/style.css') }}">
        -->
        
         <div class="csslider1 autoplay ">
        <input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_3" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_4" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
        <input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_3" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_4" type="radio" class="cs_anchor pause">
        <ul>
            <li class="cs_skeleton"><img src="{{ url('public/cssslider_files/csss_images1/1.jpg') }}" style="width: 100%;"></li>
            <li class="num0 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/1.jpg') }}" alt="Muestra Artesanal" title="Muestra Artesanal"></li>
            <li class="num1 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/2.jpg') }}" alt="Danza Ancentral" title="Danza Ancentral"></li>
            <li class="num2 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/3.jpg') }}" alt="Exposición Artística" title="Exposición Artística"></li>
            <li class="num3 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/4.jpg') }}" alt="Sesquicentenario UNAL" title="Sesquicentenario UNAL"></li>
            <li class="num4 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/5.jpg') }}" alt="Día y Noche de la Nacional" title="Día y Noche de la Nacional"></li>
        </ul>
        <div class="cs_description">
            <label class="num0"><span class="cs_title"><span class="cs_wrapper">Muestra Artesanal</span></span></label>
            <label class="num1"><span class="cs_title"><span class="cs_wrapper">Danza Ancentral</span></span></label>
            <label class="num2"><span class="cs_title"><span class="cs_wrapper">Exposición Artística</span></span></label>
            <label class="num3"><span class="cs_title"><span class="cs_wrapper">Sesquicentenario UNAL</span></span></label>
            <label class="num4"><span class="cs_title"><span class="cs_wrapper">Día y Noche de la Nacional</span></span></label>
        </div>
        <div class="cs_play_pause">
            <label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
            <label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
            <label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
            <label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
            <label class="cs_pause num3" for="cs_pause1_3"><span><i></i><b></b></span></label>
            <label class="cs_pause num4" for="cs_pause1_4"><span><i></i><b></b></span></label>
            </div>
        <div class="cs_arrowprev">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
            <label class="num4" for="cs_slide1_4"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_arrownext">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
            <label class="num4" for="cs_slide1_4"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_bullets">
            <label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/1.jpg') }}" alt="Muestra Artesanal" title="Muestra Artesanal"></span></label>
            <label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/2.jpg') }}" alt="Danza Ancentral" title="Danza Ancentral"></span></label>
            <label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/3.jpg') }}" alt="Exposición Artística" title="Exposición Artística"></span></label>
            <label class="num3" for="cs_slide1_3"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/4.jpg') }}" alt="Sesquicentenario UNAL" title="Sesquicentenario UNAL"></span></label>
            <label class="num4" for="cs_slide1_4"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/5.jpg') }}" alt="Día y Noche de la Nacional" title="Día y Noche de la Nacional"></span></label>
        </div>
        </div>
        <!--End cssSlider.com -->



       <!-- <div class="csslider1 autoplay ">
        <input name="cs_anchor1" id="cs_slide1_0" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_1" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_2" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_3" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_slide1_3" type="radio" class="cs_anchor slide">
        <input name="cs_anchor1" id="cs_play1" type="radio" class="cs_anchor" checked="">
        <input name="cs_anchor1" id="cs_pause1_0" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_1" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_2" type="radio" class="cs_anchor pause">
        <input name="cs_anchor1" id="cs_pause1_3" type="radio" class="cs_anchor pause">
        <ul>
            <li class="cs_skeleton"><img src="{{ url('public/cssslider_files/csss_images1/1.jpg') }}" style="width: 100%;"></li>
            <li class="num0 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/1.jpg') }}" alt="" title=""></li>
            <li class="num1 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/2.jpg') }}" alt="" title=""></li>
            <li class="num2 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/3.jpg') }}" alt="" title=""></li>
            <li class="num3 img slide"> <img src="{{ url('public/cssslider_files/csss_images1/4.jpg') }}" alt="" title=""></li>
        </ul><div class="cs_engine"><a href="http://cssslider.com"></a></div>
        <div class="cs_description">
            <label class="num0"></label>
            <label class="num1"></label>
            <label class="num2"></label>
            <label class="num3"></label>
        </div>
        <div class="cs_play_pause">
            <label class="cs_play" for="cs_play1"><span><i></i><b></b></span></label>
            <label class="cs_pause num0" for="cs_pause1_0"><span><i></i><b></b></span></label>
            <label class="cs_pause num1" for="cs_pause1_1"><span><i></i><b></b></span></label>
            <label class="cs_pause num2" for="cs_pause1_2"><span><i></i><b></b></span></label>
            <label class="cs_pause num3" for="cs_pause1_3"><span><i></i><b></b></span></label>
            </div>
        <div class="cs_arrowprev">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_arrownext">
            <label class="num0" for="cs_slide1_0"><span><i></i><b></b></span></label>
            <label class="num1" for="cs_slide1_1"><span><i></i><b></b></span></label>
            <label class="num2" for="cs_slide1_2"><span><i></i><b></b></span></label>
            <label class="num3" for="cs_slide1_3"><span><i></i><b></b></span></label>
        </div>
        <div class="cs_bullets">
            <label class="num0" for="cs_slide1_0"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/1.jpg') }}" alt="" title=""></span></label>
            <label class="num1" for="cs_slide1_1"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/2.jpg') }}" alt="" title=""></span></label>
            <label class="num2" for="cs_slide1_2"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/3.jpg') }}" alt="" title=""></span></label>
            <label class="num3" for="cs_slide1_3"> <span class="cs_point"></span>
                <span class="cs_thumb"><img src="{{ url('public/cssslider_files/csss_tooltips1/4.jpg') }}" alt="" title=""></span></label>
        </div>
        </div>
        -->
                
            </div>
        </div>

<br>
<br>

<footer class="clear">
        <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
            <a href="http://www.legal.unal.edu.co" target="_top">Régimen Legal</a>
            <a href="http://www.unal.edu.co/dnp" target="_top">Talento humano</a>
            <a href="http://www.unal.edu.co/contratacion/" target="_top">Contratación</a>
            <a href="http://www.unal.edu.co/dnp/" target="_top">Ofertas de empleo</a>
            <a href="http://rendiciondecuentas.unal.edu.co/" target="_top">Rendición de cuentas</a>
            <a href="http://docentes.unal.edu.co/concurso-profesoral/" target="_top">Concurso docente</a>
            <a href="http://www.pagovirtual.unal.edu.co/" target="_top">Pago Virtual</a>
            <a href="http://www.unal.edu.co/control_interno/index.html" target="_top">Control interno</a>
            <a href="http://unal.edu.co/siga/" target="_top">Calidad</a>
            <a href="http://unal.edu.co/buzon-de-notificaciones/" target="_self">Buzón de notificaciones</a>
        </nav>
        <nav class="col-md-3 col-lg-3 col-sm-3 col-xs-4 col-xxs-6 gobiernoLinea">
            <a href="http://correo.unal.edu.co" target="_top">Correo institucional</a>
            <a href="index.html#">Mapa del sitio</a>
            <a href="http://redessociales.unal.edu.co" target="_top">Redes Sociales</a>
            <a href="index.html#">FAQ</a>
            <a href="http://unal.edu.co/quejas-y-reclamos/" target="_self">Quejas y reclamos</a>
            <a href="http://unal.edu.co/atencion-en-linea/" target="_self">Atención en línea</a>
            <a href="http://unal.edu.co/encuesta/" target="_self">Encuesta</a>
            <a href="index.html#">Contáctenos</a>
            <a href="http://www.onp.unal.edu.co" target="_top">Estadísticas</a>
            <a href="index.html#">Glosario</a>
        </nav>
        <div class="col-md-4 col-lg-4 col-sm-4 col-xs-4 col-xxs-12 footer-info">
            <p class="col-sm-12 col-md-6 contacto">
                <b>Contacto página web:</b><br/> Carrera 32 # 12-00<br/> Edificio Administrativo<br/> Palmira, Colombia<br/> (+57 2) 286 8888 Ext. 35348
            </p>
            <p class="col-sm-12 col-md-6 derechos">
                © Copyright 2014<br/> Algunos derechos reservados.<br/>
                <a title="Comuníquese con el administrador de este sitio web" href="mailto:EMAIL@unal.edu.co">ofbienestar_pal@unal.edu.co</a><br/>
                <a href="index.html#">Acerca de este sitio web</a><br/> Actualización:16/11/16
            </p>
        </div>

        <div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 logos">
            <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
                <a class="col-xs-6 col-sm-12" href="http://www.orgulloun.unal.edu.co">
                    <img class="hidden-print" alt="Orgullo UN" src="{{ url('public/unal/images/log_orgullo.png') }}" width="78" height="21" />
                    <img class="visible-print" alt="Orgullo UN" src="{{ url('public/unal/images/log_orgullo_black.png') }}" width="94" height="37" />
                </a>

                <a class="col-xs-6 col-sm-12 imgAgencia" href="http://www.agenciadenoticias.unal.edu.co/inicio.html">
                    <img class="hidden-print" alt="Agencia de noticias" src="{{ url('public/unal/images/log_agenc.png') }}" width="94" height="25" />
                    <img class="visible-print" alt="Agencia de noticias" src="{{ url('public/unal/images/log_agenc_black.png') }}" width="94" height="37" />
                </a>
            </div>
            <div class="col-xs-6 col-sm-12 col-md-6 no-padding">
                <a class="col-xs-6 col-sm-12" href="https://www.sivirtual.gov.co/memoficha-entidad/-/entidad/T0356">
                    <img alt="Trámites en línea" src="{{ url('public/unal/images/log_gobiern.png') }}" width="67" height="51" />
                </a>

                <a class="col-xs-6 col-sm-12" href="http://www.contaduria.gov.co/">
                    <img alt="Contaduría general de la republica" src="{{ url('public/unal/images/log_contra.png') }}" width="67" height="51" />
                </a>
            </div>

        </div>
    </footer>




        <script src="{{ url('public/js/jquery1.min.js') }}"></script>
        <script src="{{ url('public/js/main.js') }}"></script> <!-- Gem jQuery -->
    </body>
</html>
