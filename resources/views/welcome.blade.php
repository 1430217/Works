<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{ config('app.name', 'U-Med') }}</title>
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
                            <span class="navbar-burger burger" data-target="navbarMenu">
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                                <span></span>
                            </span>
                        </div>

                        <div id="navbarMenu" class="navbar-menu">
                            <div class="navbar-end">
                                <div class="tabs is-right">
                                    <ul>
                                        @guest

                                        @else
                                            <li>Bienvenido: Nombre | </li>
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
                                        <a class="button is-white is-outlined" href="/login"> <!-- Si esta loggeado dirá cerrar sesión -->
                                            <span class="icon">
                                                <i class="fa fa-sign-in-alt"></i>
                                            </span>
                                            <span title="Pásenos con 70 profe!! :(">Iniciar Sesión</span>
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
                    La nueva forma de agendar citas médicas U-Med
                    </h1>
                    <h2 class="subtitle">
                    </h2>
                </div>
            </div>
        </section>

        <div class="box cta">
            <p class="has-text-centered">
                <span class="tag is-primary">Nuevo</span> Si tienes un consultorio agregalo a nuestra base de datos! <a href="#"> Saber Más.</a>
            </p>
        </div>

        <section class="container">
            <div class="columns features">
                <div class="column is-4">
                    <div class="card is-shady">
                        <div class="card-image has-text-centered">
                            <i class="fa fa-heartbeat"></i>
                        </div>

                        <div class="card-content">
                            <div class="content">
                                <h4>Consultas medicas. </h4>
                                <p>U-Med es un sistema enfocado al area de medicina, ofrece consultas médicas a sus usuarios.</p>
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
                                <h4>Mapa de consultorios.</h4>
                                <p>Mediante un mapa se puede visualizar los consultorios medicos que esten al alredor y así 
                                    escoger el que mejor. Con la posibilidad de poder pagar la cita mediante PayPal.
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
                                <p>U-Med ofrece protección de los datos de los usuarios ya que contamos con un centificado SSL. Si desea saber más
                                    sobre el certificado SSL puede ver este <a href="https://www.digicert.com/es/ssl.htm">enlace.</a>
                                </p>
                                <!--<p><a href="#">Learn more</a></p>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="intro column is-8 is-offset-2">
                <h2 class="title">U-Med es perfecto para consultorios nuevos!</h2><br>
                <p class="subtitle">U-Med tiene como enfoque principal a los nuevos consultorios emergentes en la ciudad,
                    ya que con esto que estamos realizado se podrán dar a conocer con los usuarios del sistema y así hacerse de
                    pacientes potenciales.
                </p>
            </div>

            <div class="sandbox">
                <div class="tile is-ancestor">
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Hello World</p>
                            <p class="subtitle">What is up?</p>
                        </article>
                    </div>

                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Foo</p>
                            <p class="subtitle">Bar</p>
                        </article>
                    </div>

                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Third column</p>
                            <p class="subtitle">With some content</p>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="tile is-ancestor">
                    <div class="tile is-vertical is-8">
                        <div class="tile">
                            <div class="tile is-parent is-vertical">
                                <article class="tile is-child notification is-white">
                                    <p class="title">Vertical tiles</p>
                                    <p class="subtitle">Top box</p>
                                </article>
                                <article class="tile is-child notification is-white">
                                    <p class="title">Vertical tiles</p>
                                    <p class="subtitle">Bottom box</p>
                                </article>
                            </div>

                            <div class="tile is-parent">
                                <article class="tile is-child notification is-white">
                                    <p class="title">Middle box</p>
                                    <p class="subtitle">With an image</p>
                                    <figure class="image is-4by3">
                                        <img src="https://picsum.photos/640/480/?random" alt="Description">
                                    </figure>
                                </article>
                            </div>
                        </div>

                        <div class="tile is-parent is-shady">
                            <article class="tile is-child notification is-white">
                                <p class="title">Wide column</p>
                                <p class="subtitle">Aligned with the right column</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                                </div>
                            </article>
                        </div>
                    </div>

                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <div class="content">
                                <p class="title">Tall column</p>
                                <p class="subtitle">With even more content</p>
                                <div class="content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam semper diam at erat pulvinar, at pulvinar felis blandit. Vestibulum volutpat tellus diam, consequat gravida libero rhoncus ut. Morbi maximus, leo sit amet vehicula
                                    eleifend, nunc dui porta orci, quis semper odio felis ut quam.</p>
                                    <p>Suspendisse varius ligula in molestie lacinia. Maecenas varius eget ligula a sagittis. Pellentesque interdum, nisl nec interdum maximus, augue diam porttitor lorem, et sollicitudin felis neque sit amet erat. Maecenas imperdiet
                                    felis nisi, fringilla luctus felis hendrerit sit amet. Aenean vitae gravida diam, finibus dignissim turpis. Sed eget varius ligula, at volutpat tortor.</p>
                                    <p>Integer sollicitudin, tortor a mattis commodo, velit urna rhoncus erat, vitae congue lectus dolor consequat libero. Donec leo ligula, maximus et pellentesque sed, gravida a metus. Cras ullamcorper a nunc ac porta. Aliquam
                                    ut aliquet lacus, quis faucibus libero. Quisque non semper leo.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="tile is-ancestor">
                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Side column</p>
                            <p class="subtitle">With some content</p>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                            </div>
                        </article>
                    </div>

                    <div class="tile is-parent is-8 is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Main column</p>
                            <p class="subtitle">With some content</p>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                            </div>
                        </article>
                    </div>
                </div>

                <div class="tile is-ancestor">
                    <div class="tile is-parent is-8 is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Murphy's law</p>
                            <p class="subtitle">Anything that can go wrong will go wrong</p>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                            </div>
                        </article>
                    </div>

                    <div class="tile is-parent is-shady">
                        <article class="tile is-child notification is-white">
                            <p class="title">Main column</p>
                            <p class="subtitle">With some content</p>
                            <div class="content">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin ornare magna eros, eu pellentesque tortor vestibulum ut. Maecenas non massa sem. Etiam finibus odio quis feugiat facilisis.</p>
                            </div>
                        </article>
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