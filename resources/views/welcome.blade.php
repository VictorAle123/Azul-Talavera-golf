<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Azul Talavera</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->

        <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />

        <!-- Styles -->
        <style>
            
        
            .full-height {
                height: 100vh;
            }
            
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
           
            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
        </style>

    </head>
    <body id="page-top">
        <!-- Nab-->
        

        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Azul Talavera Country Club</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">


                        @if (Route::has('login'))
                    @auth
                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ url('/home') }}">Perfil</a>

                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                             {{ __('Cerrar Sesion') }}
    
                         </a>
    
                         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                             @csrf
                         </form>


                    @else

                    <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href=" {{ route('login') }}">Iniciar Sesion</a>
                        @if (Route::has('register'))

                        @endif
                    @endauth
                </div>
            @endif

                    </ul>

                </div>
            </div>
        </nav>



        <!-- Masthead-->
        <header style="background-color: #5CA4CE;" class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->
                <img class="masthead-avatar mb-5" src="imagenes/logo.png" height="350px" alt="..." />
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Azul Talavera Country Club</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Torreón, México</p>
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
                
                <!-- Portfolio Section Heading-->
                <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0"> Tipos de juego</h2>
                <!-- Icon Divider-->
                <div class="divider-custom">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>


                <!-- Portfolio Grid Items-->
                <div class="row justify-content-center">
                    <!-- Portfolio Item 1-->
                    
                    

                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i > Stroke</i></div>
                            </div>
                            <img class="img-fluid" src="imagenes/stroke.jpg" alt="..." />
                        </div>
                    </div>

                    <!-- Portfolio Item 2-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i > Match </i></div>
                            </div>
                            <img class="img-fluid" src="imagenes/matchs.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 3-->
                    <div class="col-md-6 col-lg-4 mb-5">
                        <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                            <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                <div class="portfolio-item-caption-content text-center text-white"><i >Stableford</i></div>
                            </div>
                            <img class="img-fluid" src="imagenes/sta.jpg" alt="..." />
                        </div>
                    </div>
                    <!-- Portfolio Item 4-->
                    
                    <!-- Portfolio Item 5-->
                  


                    <!-- Portfolio Item 6-->
                    
                </div>
            </div>
        </section>
        <!-- About Section-->
        <section style="background-color: #5CA4CE;" class="page-section  text-white mb-0" id="about">
            <div class="container">
                <!-- About Section Heading-->

                <h2 class="page-section-heading text-center text-uppercase text-white">Sobre nosotros</h2>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- About Section Content-->
                <div class="row">
                    <div class="col-lg-4 ms-auto"><p class="lead">Situado a 6 km del Canal de la Perla, el Montebello Golf And Resort Torreón ofrece un campo de golf, aparcamiento privado gratuito y un restaurante. El hotel se ubica en Torreón, a 5 km del centro de la ciudad.</p></div>
                    <div class="col-lg-4 me-auto"><p class="lead">El alojamiento dispone de 46 habitaciones con un balcón, Wi-Fi y TV con canales por satélite. Se ofrecen habitaciones con vistas al lago. Las habitaciones están equipadas con un baño privado con toallas, toallas de baño y un secador de pelo.</p></div>
                </div>
               
            </div>
        </section>
        <!-- Contact Section-->
        
        <!-- Footer-->
        <footer class="footer text-center">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">ubicacion</h4>
                        <p class="lead mb-0">
                            Bulevar Mieleras Km. 1.5, Parque Industrial Lajat, 27259 Torreón, Coah.
                            <br />
                          
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Redes sociales</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.facebook.com/azultalaveratorreon"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="https://www.instagram.com/azultalaveratorreon/?hl=es-la"><i class="fab fa-fw fa-instagram"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    
                </div>
            </div>
        </footer>

        <!-- Copyright Section-->
        



        <!-- Portfolio Modals-->
        <!-- Portfolio Modal 1-->
        <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Stroke</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    
                                    <!-- Portfolio Modal Stroke - Text-->
                                    <p class="mb-4">En modalidad Stroke Play se contabilizan todos los golpes y todos los competidores compiten contra todos. El jugador que efectúe menos golpes en el recorrido resultará ganador. En esta modalidad se juegan la mayoría de los torneos profesionales.</p>
                                   
                                   
                                    <form action="{{route('partida.store')}}" method="POST" enctype="multipart/form-data">
                                        @csrf

                                    {{-- <a href="{{ route('stroke.index') }}" class="btn btn-primary">
                                        
                                        {{ __('Jugar con perfil de usuario') }}
                                    </a> --}}

                                    
                                    <button type="submit" class="btn btn-success">
                                        <i class="fas fa-bolt wd-10 mg-r-5"></i>
                                        {{ __('Create') }}
                                    </button>

                                    </form>

                                   
                                    <br>
                                    <br>

                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 2-->
        <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Match</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal Match - Text-->

                                    <p class="mb-4">Es la modalidad más extendida en torneos profesionales después del Stroke Play. Juegan dos jugadores, uno contra otro. Se contabilizan los hoyos ganados y perdidos. Si un jugador lleva un hoyo ganado de ventaja, se denomina “uno arriba” o “uno abajo”, si es el caso contrario. Un partido de golf en la modalidad match play acaba cuando uno de los jugadores lleva más hoyos ganados que los hoyos que quedan para finalizar el recorrido. Entonces se denomina que el jugador vencedor le ha hecho “match” al perdedor.</p>
                                    
                                    <a href="{{ route('match.index') }}" class="btn btn-primary">
                                        
                                        {{ __('Jugar como invitado') }}
                                    </a>
                                    
                                   

                                

                                    <a href="{{ route('match.index') }}" class="btn btn-primary">
                                        
                                        {{ __('Jugar con perfil de usuario') }}
                                    </a>
                                    
                                    <br>
                                    <br>

                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">

                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Portfolio Modal 3-->
        <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Stableford</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                
                               
                                    <!-- Portfolio Modal - Text-->

                                    <p class="mb-4">Modalidad de juego Stroke Play en la que en cada hoyo puntúa con relación al par: 1 punto por el bogey, dos por el par, tres por el birdie, cuatro por el eagle. Cuando no se puede terminar el hoyo en los golpes que valen para puntuar, se recoge la bola. Gana quien suma más puntos. La modalidad stableford es muy utilizada en campeonatos de clubs, permitiendo un juego más fluido que otras modalidades, ya que el jugador puede levantar la bola si esta no va a contar.  .</p>
                                    
                                    <a href="{{ route('stableford.index') }}" class="btn btn-primary">
                                        
                                        {{ __('Jugar como invitado') }}
                                    </a>
                                    
                                   

                                

                                    <a href="{{ route('stableford.index') }}" class="btn btn-primary">
                                        
                                        {{ __('Jugar con perfil de usuario') }}
                                    </a>
                                    <br>
                                    <br>

                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">

                                        


                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Portfolio Modal 6-->
        <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                    <div class="modal-body text-center pb-5">
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-8">
                                    <!-- Portfolio Modal - Title-->
                                    <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Submarine</h2>
                                    <!-- Icon Divider-->
                                    <div class="divider-custom">
                                        <div class="divider-custom-line"></div>
                                        <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                        <div class="divider-custom-line"></div>
                                    </div>
                                    <!-- Portfolio Modal - Image-->
                                    <!-- Portfolio Modal - Text-->
                                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                    <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                        <i class="fas fa-times fa-fw"></i>
                                        Cerrar Ventana
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
