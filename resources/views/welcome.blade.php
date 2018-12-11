<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'Works') }}</title>
        <link rel="shortcut icon" href="img/medium-brands.svg" type="image/x-icon">
        <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">-->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
        <!-- Bulma Version 0.7.2-->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.2/css/bulma.min.css" />
        <link rel="stylesheet" href="https://unpkg.com/bulma-modal-fx/dist/css/modal-fx.min.css" />
        <script defer src="https://use.fontawesome.com/releases/v5.3.1/js/all.js"></script>
    </head>

    <body>
        <section class="hero is-info is-medium is-bold">
            <div class="hero-head">
                <nav class="navbar">
                    <div class="container">
                        <div class="navbar-brand">
                            <a class="navbar-item" href="/">
                                <!--<img src="http://bulma.io/images/bulma-type-white.png" alt="Logo">-->
                                <img src="img/Logo_UMed.png" alt="Logo">
                            </a>
                            <a class="navbar-burger burger" data-target="#navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </a>
                        </div>

                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <ul>
                                        @guest

                                        @else
                                            <li>Bienvenido: {{Auth::user()->name}} | </li>
                                        @endguest
                                        <li class="is-active"><a>Home</a></li>
                                        
                                        @guest
                                            <li><a href="/registrar/{{'Freelancer'}}">Registrarse como freelancer</a></li> <!-- Cuando no esté logeado se vera -->
                                            <li><a href="/registrar/{{'Empresa'}}">Registrarse como empresa</a></li>
                                        @else
                                            
                                            <li><a href="/dashboard">Ir al dashboard</a></li>
                                        @endguest
                                        
                                    </ul>
                                    <span class="navbar-item">
                                        <a class="button is-white is-outlined" href="{{Auth::check() ? '/logout' : '/login' }}"> <!-- Si esta loggeado dirá cerrar sesión -->
                                            <span class="icon">
                                                <i class="fa {{Auth::check() ? 'fa-sign-out-alt' : 'fa-sign-in-alt'}}"></i>
                                            </span>
                                            <span title="Pásenos con 70 profe!! :(">{{Auth::check() ? 'Cerrar Sesión' : 'Iniciar Sesión' }}</span>
                                        </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>

            <div class="hero-body">
                <div class="container has-text-centered">
                    <h1 class="title">
                    La nueva forma de conseguir trabajo - WORKS
                    </h1>
                    <h2 class="subtitle">
                    </h2>
                </div>
            </div>
        </section>

        <div class="box cta">
            <p class="has-text-centered">
                <span class="tag is-primary">Nuevo</span> Si tienes un desarrollor o una empresa registrate en Works! <a href="#"> Saber Más.</a>
            </p>
        </div>

        <section class="container">
            <div class="columns features">
                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-globe-americas"></i>
                        </div>

                        <div class="card-content">
                            <div class="content">
                                <h4>Proyectos en todo el mundo!! </h4>
                                <p>Proyectos por todo el mundo de miles de freelancers y empresas.</p>
                                <!--<p><a href="#">Learn more</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-map"></i>
                        </div>

                        <div class="card-content">
                            <div class="content">
                                <h4>Proyectos de todas las complejidades.</h4>
                                <p>Podras encontrar proyectos de difentes complejidades.
                                </p>
                                <!--<p><a href="#">Learn more</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>

                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-shield-alt"></i>
                        </div>

                        <div class="card-content">
                            <div class="content">
                                <h4> Seguridad de los datos. </h4>
                                <p>WORKS ofrece protección de los datos de los usuarios.</a>
                                </p>
                                <!--<p><a href="#">Learn more</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro column is-8 is-offset-2">
                <h2 class="title">WORKS es perfecto para los programadores nuevos!</h2><br>
                <p class="subtitle">WORKS tiene como enfoque principal a los nuevos desarrolladores emergentes,
                    ya que con esto que estamos realizado se podrán dar a conocer con los usuarios del sistema y así hacerse de
                    clientes potenciales.
                </p>
            </div>

                </div>

     

   
            </div>

        </section>

        <footer class="footer">
            <div class="container">
                <div class="content has-text-centered">
                    <div class="control level-item">
                        <a href="http://www.upvictoria.edu.mx/">
                            <div class="tags has-addons">
                                <span class="tag is-dark">Integración de Tecnologías de la información</span>
                                <span class="tag is-info">2018</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>