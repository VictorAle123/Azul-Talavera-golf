<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Freelancer - Start Bootstrap Theme</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v5.15.3/js/all.js" crossorigin="anonymous"></script>

        <!-- Google fonts-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>

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


        <div class="modal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Modal title</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Modal body text goes here.</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-primary">Save changes</button>
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>


        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Avatar Image-->



                <table class="table">

                    <thead class="thead-dark">

                      <tr>
                        <th scope="col">hoyo</th>
                        <th scope="col">{{ auth()->user()->name }}</th>
                        <th scope="col">Jugador2</th>
                        <th scope="col">Jugador3</th>
                        <th scope="col">Jugador4</th>

                      </tr>
                    </thead>
                    <tbody>
                     
                        @for ($i = 0; $i < 9; $i++)



                        <tr>
                          
                        <th scope="row">{{$i+1}} </th>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                            min="1" max="20"></td>

                      </tr>

                      @endfor


                      <th scope="row">Vuelta 1 </th>


                    </tbody>
                  </table>


                  <table class="table">

                    <thead class="thead-dark">

                      <tr>
                        <th scope="col">hoyo</th>
                        <th scope="col">{{ auth()->user()->name }}</th>
                        <th scope="col">Jugador2</th>
                        <th scope="col">Jugador3</th>
                        <th scope="col">Jugador4</th>

                      </tr>
                    </thead>
                    <tbody>
                     
                        @for ($v = 10; $v < 18; $v++)



                        <tr>
                          
                        <th scope="row">{{$v+1}} </th>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                        min="1" max="20"></td>

                        <td><input type="number" id="tentacles" name="tentacles"
                            min="1" max="20"></td>

                      </tr>

                      @endfor

                      <th scope="row">Total </th>


                    </tbody>
                  </table>
                  
           

                <!-- Masthead Subheading-->
               
            </div>
        </header>
        <section class="page-section portfolio" id="portfolio">
            <div class="container">

                <!-- Button trigger modal -->

            

         

        <!-- Bootstrap core JS-->
        <!-- Core theme JS-->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <script src="js/scripts.js"></script>

        <script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>

    </body>
</html>
