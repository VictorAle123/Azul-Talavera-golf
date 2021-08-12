
@extends('layouts.app')

@section('content')


<section class="page-section portfolio" id="portfolio">
  <div class="container">
<div class="row justify-content-center">
  

  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Perfil de administrador</h2>
  <br>
  <br>
  <br>


                        {{-- {{ auth()->user()->name }} --}}

                        {{-- <img src="{{ auth()->user()->foto }}" class="img-fluid rounded-start" alt="..."> --}}

                        {{-- <img src="imagenes/{{ auth()->user()->foto }}" class="img-fluid rounded-start" alt="...">

                        $destination_path = 'public/storage/avatars';
 --}}



                        {{-- <form action="{{ asset('imagenes/perfil.jpg')}}" method="POST" enctype="multipart/form-data" id="upload">
                          {{ csrf_field() }}
                          <input name="foto" type="file" class="form-control" required>
                           --}}
                          {{-- placeholder="nombre..." value=""/> --}}



                          {{-- <button type="submit" class="btn btn-primary btn-block btn-sm">
                            <span class="glyphicon glyphicon-upload"></span>
                            Actualizar imagen
                          </button>
                        </form> --}}

                        {{-- <img src=" {{ asset(Auth::user()->foto_route)}}"  alt="tu imagen de perfil"> --}}


                          {{-- <input type="file" name="imagen"/>
                          <input type="submit" value="Aceptar">
                        </form> --}}


                  
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th > id </th>
                        <th > Nombre </th>
                        <th >Apellido </th>
                        <th >apellido</th>
                        <th >Opcion</th>

                      </tr> 
                       </thead>
                    <tbody>
                      
                   
                      @foreach ($usuarios as $usuarios)
                          
                      
                      <tr>

                        <th scope="row">{{$usuarios->id}} </th>
                        <th scope="row">{{$usuarios->name}} </th>
                        <th scope="row">{{$usuarios->apellido}} </th>
                        <th scope="row">{{$usuarios->email}}</th>
                        

                        {{-- <td> <a href="{{ route('register') }}" class="btn btn-primary">
                                        
                          {{ __('Registrar Usuario') }}

                          <form method="POST" action="{{ route('usuario.destroy', $student->id)}}">
                            
                          <a class="btn btn-primary" href="{{ route('usuario.edit', $student->id) }}"> Editar </a>

                           {{ csrf_field() }}

                           {{ method('DELETE')}}
                           <input type="submit" class="btn btn-danger delete-user" value="Delete">

                          </form>

                      </a></td> --}}


                      
                        {{-- <td></td>
                        <td>  </td>
                        <td>  </td> --}}


                      </tr>

                      @endforeach

                      <tr>

                        <th scope="row"> </th>
                        <td></td>
                        <td></td>
                        <td></td>
                      </tr>
                      <tr>
                        <th scope="row"> </th>
                        <td colspan="2"> </td>
                        <td></td>
                      </tr>
                    </tbody>
                  </table> 




            </div>
        </div>
    </div>
</div>
@endsection
