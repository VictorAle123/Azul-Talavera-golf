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
        <header style="background-color: #5CA4CE;" class="masthead text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                
                <!-- Tabla -->


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

                        <form method="POST" action=""><br>
                     
                        @for ($i = 0; $i < 9; $i++)

                        <tr>
                          
                        <th scope="row">{{$i+1}} </th>

                        <td><input type="number" value="0" id="tentacles{{$i+1}}"  name="tentacles"
                        min="0" max="20" > </td>

                        <td><input type="number" value="0" id="juno{{$i+1}}"  name="tentacles"
                            min="1" max="20"></td>

                        <td><input type="number" value="0" id="jtres{{$i+1}}"  name="tentacles"
                                min="1" max="20"></td>

                                <td><input type="number" value="0" id="jcuatro{{$i+1}}"  name="tentacles"
                                    min="1" max="20"></td>


                        </form>

                        @endfor
                    </tr>

                                        

                      <th scope="row">Vuelta 1 </th>

                      <th scope="row"> <input type="text" id="res" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="j1" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="j3" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="j4" disabled name="tentacles" size ="4px"> </th>

                     


                    </tbody>
                  </table>

                  <button onclick="vuelta1()">Obtener resultado</button>


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
                     
                        @for ($v = 10; $v < 19; $v++)

                        <tr>
                          
                        <th scope="row">{{$v}} </th>

                        

                        <td><input type="number" value="0" id="v2uno{{$v+1}}"  name="tentacles"
                            min="0" max="20" > </td>

                        <td><input type="number" value="0" id="v2dos{{$v+1}}"  name="tentacles"
                                min="0" max="20" > </td>

                        <td><input type="number" value="0" id="v2tres{{$v+1}}"  name="tentacles"
                            min="0" max="20" > </td>

                        <td><input type="number" value="0" id="v2cuatro{{$v+1}}"  name="tentacles"
                            min="0" max="20" > </td>
                            
                      </tr>

                      @endfor

                      <th scope="row">Vuelta 2 </th>

                      <th scope="row"> <input type="text" id="v2j1" disabled  name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="v2j2" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="v2j3"disabled  name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="v2j4" disabled name="tentacles" size ="4px"> </th>

                      <tr>

                      <th scope="row">Total </th>

                      <th scope="row"> <input type="text" id="tv1" disabled name="tentacles" size ="4px">  </th>

                      <th scope="row"> <input type="text" id="tv2" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="tv3" disabled name="tentacles" size ="4px"> </th>

                      <th scope="row"> <input type="text" id="tv4" disabled name="tentacles" size ="4px"> </th>

                    </tr>

                    </tbody>
                  </table>

                  <button onclick="vuelta1()">Obtener resultado</button>
                  
           

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

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>



        <script type="text/javascript">

            function vuelta1(){

                console.log("h1 " + $("#tentacles1").val())
                console.log("h2 " + $("#tentacles2").val())
                console.log("h3 " + $("#tentacles3").val())
                console.log("h1 " + $("#tentacles4").val())
                console.log("h2 " + $("#tentacles5").val())
                console.log("h3 " + $("#tentacles6").val())
                console.log("h1 " + $("#tentacles7").val())
                console.log("h2 " + $("#tentacles8").val())
                console.log("h3 " + $("#tentacles9").val())

                console.log("h1 " + $("#juno1").val())
                console.log("h2 " + $("#juno2").val())
                console.log("h3 " + $("#juno3").val())
                console.log("h1 " + $("#juno4").val())
                console.log("h2 " + $("#juno5").val())
                console.log("h3 " + $("#juno6").val())
                console.log("h1 " + $("#juno7").val())
                console.log("h2 " + $("#juno8").val())
                console.log("h3 " + $("#juno9").val())


                console.log("h1 " + $("#jtres1").val())
                console.log("h2 " + $("#jtres2").val())
                console.log("h3 " + $("#jtres3").val())
                console.log("h1 " + $("#jtres4").val())
                console.log("h2 " + $("#jtres5").val())
                console.log("h3 " + $("#jtres6").val())
                console.log("h1 " + $("#jtres7").val())
                console.log("h2 " + $("#jtres8").val())
                console.log("h3 " + $("#jtres9").val())

                console.log("h1 " + $("#jcuatro1").val())
                console.log("h2 " + $("#jcuatro2").val())
                console.log("h3 " + $("#jcuatro3").val())
                console.log("h1 " + $("#jcuatro4").val())
                console.log("h2 " + $("#jcuatro5").val())
                console.log("h3 " + $("#jcuatro6").val())
                console.log("h1 " + $("#jcuatro7").val())
                console.log("h2 " + $("#jcuatro8").val())
                console.log("h3 " + $("#jcuatro9").val())


                console.log("h1 " + $("#v2uno11").val())
                console.log("h1 " + $("#v2uno12").val())
                console.log("h2 " + $("#v2uno13").val())
                console.log("h3 " + $("#v2uno14").val())
                console.log("h1 " + $("#v2uno15").val())
                console.log("h2 " + $("#v2uno16").val())
                console.log("h1 " + $("#v2uno17").val())
                console.log("h2 " + $("#v2uno18").val())
                console.log("h3 " + $("#v2uno19").val())

                console.log("h1 " + $("#v2dos11").val())
                console.log("h2 " + $("#v2dos12").val())
                console.log("h3 " + $("#v2dos13").val())
                console.log("h1 " + $("#v2dos14").val())
                console.log("h2 " + $("#v2dos15").val())
                console.log("h3 " + $("#v2dos16").val())
                console.log("h1 " + $("#v2dos17").val())
                console.log("h2 " + $("#v2dos18").val())
                console.log("h3 " + $("#v2dos19").val())

                console.log("h1 " + $("#v2tres11").val())
                console.log("h2 " + $("#v2tres12").val())
                console.log("h3 " + $("#v2tres13").val())
                console.log("h1 " + $("#v2tres14").val())
                console.log("h2 " + $("#v2tres15").val())
                console.log("h3 " + $("#v2tres16").val())
                console.log("h1 " + $("#v2tres17").val())
                console.log("h2 " + $("#v2tres18").val())
                console.log("h3 " + $("#v2tres19").val())

                console.log("h1 " + $("#v2cuatro11").val())
                console.log("h2 " + $("#v2cuatro12").val())
                console.log("h3 " + $("#v2cuatro13").val())
                console.log("h1 " + $("#v2cuatro14").val())
                console.log("h2 " + $("#v2cuatro15").val())
                console.log("h3 " + $("#v2cuatro16").val())
                console.log("h1 " + $("#v2cuatro17").val())
                console.log("h2 " + $("#v2cuatro18").val())
                console.log("h3 " + $("#v2cuatro19").val())





                var total = parseInt($("#tentacles1").val()) + parseInt($("#tentacles2").val()) + parseInt($("#tentacles3").val()) 
                + parseInt($("#tentacles4").val())  + parseInt($("#tentacles5").val())  + parseInt($("#tentacles6").val())
                + parseInt($("#tentacles7").val())  + parseInt($("#tentacles8").val())  + parseInt($("#tentacles9").val())
                
                 ;

                 $("#res").val(total)

                 

                
                console.log("total " + total)

                var totj1 = parseInt($("#juno1").val()) + parseInt($("#juno2").val()) + parseInt($("#juno3").val()) 
                + parseInt($("#juno4").val())  + parseInt($("#juno5").val())  + parseInt($("#juno6").val())
                + parseInt($("#juno7").val())  + parseInt($("#juno8").val())  + parseInt($("#juno9").val())
                
                 ;

                 $("#j1").val(totj1)

                

                 console.log("total " + totj1)



                 var totj3 = parseInt($("#jtres1").val()) + parseInt($("#jtres2").val()) + parseInt($("#jtres3").val()) 
                + parseInt($("#jtres4").val())  + parseInt($("#jtres5").val())  + parseInt($("#jtres6").val())
                + parseInt($("#jtres7").val())  + parseInt($("#jtres8").val())  + parseInt($("#jtres9").val())
                
                 ;

                 $("#j3").val(totj3)

                

                 console.log("total " + totj3)


                  console.log("total " + totj3)



                 var totj4 = parseInt($("#jcuatro1").val()) + parseInt($("#jcuatro2").val()) + parseInt($("#jcuatro3").val()) 
                + parseInt($("#jcuatro4").val())  + parseInt($("#jcuatro5").val())  + parseInt($("#jcuatro6").val())
                + parseInt($("#jcuatro7").val())  + parseInt($("#jcuatro8").val())  + parseInt($("#jcuatro9").val())
                
                 ;

                 $("#j4").val(totj4)

                

                 console.log("total " + totj4)

                 //vuelta 2

                 var t1 = parseInt($("#v2uno11").val()) + parseInt($("#v2uno12").val()) + parseInt($("#v2uno13").val()) 
                + parseInt($("#v2uno14").val())  + parseInt($("#v2uno15").val())  + parseInt($("#v2uno16").val())
                + parseInt($("#v2uno17").val())  + parseInt($("#v2uno18").val())  + parseInt($("#v2uno19").val())
                
                 ;

                 $("#v2j1").val(t1)

                

                 console.log("total " + t1)


                 var t2 = parseInt($("#v2dos11").val()) + parseInt($("#v2dos11").val()) + parseInt($("#v2dos13").val()) 
                + parseInt($("#v2dos14").val())  + parseInt($("#v2dos15").val())  + parseInt($("#v2dos16").val())
                + parseInt($("#v2dos17").val())  + parseInt($("#v2dos18").val())  + parseInt($("#v2dos19").val())
                
                 ;

                 $("#v2j2").val(t2)

                 var t3 = parseInt($("#v2tres11").val()) + parseInt($("#v2tres12").val()) + parseInt($("#v2tres13").val()) 
                + parseInt($("#v2tres14").val())  + parseInt($("#v2tres15").val())  + parseInt($("#v2tres16").val())
                + parseInt($("#v2tres17").val())  + parseInt($("#v2tres18").val())  + parseInt($("#v2tres19").val())

                 ;

                 $("#v2j3").val(t3)

                

                 console.log("total " + t3)


                 var t4 = parseInt($("#v2cuatro11").val()) + parseInt($("#v2cuatro12").val()) + parseInt($("#v2cuatro13").val()) 
                + parseInt($("#v2cuatro14").val())  + parseInt($("#v2cuatro15").val())  + parseInt($("#v2cuatro16").val())
                + parseInt($("#v2cuatro17").val())  + parseInt($("#v2cuatro18").val())  + parseInt($("#v2cuatro19").val())

                 ;

                 $("#v2j4").val(t4)

                

                 console.log("total " + t4)

                 //Resultado total de las vueltas


                 var totv = parseInt($("#v2j1").val()) + parseInt($("#res").val())
                 $("#tv1").val(totv)

                 console.log("total " + totv)
                 

                 var totv2 = parseInt($("#v2j2").val()) + parseInt($("#j1").val())
                 $("#tv2").val(totv2)


                 console.log("total " + totv2)

                 var totv3 = parseInt($("#v2j3").val()) + parseInt($("#j3").val())
                 $("#tv3").val(totv3)

                 console.log("total " + totv3)



                 var totv4 = parseInt($("#v2j4").val()) + parseInt($("#j4").val())
                 $("#tv4").val(totv4)

                 console.log("total " + totv4)








            }
               </script>


    </body>
</html>
