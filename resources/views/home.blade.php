@extends('layouts.app')

@section('content')


<section class="page-section portfolio" id="portfolio">
  <div class="container">
<div class="row justify-content-center">
  <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Perfil</h2>
  <br>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">{{ __('Informacion del jugador') }}</div>

                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row g-0">
                      <div class="col-md-4">
                        <img src=" {{ asset('imagenes/perfil.jpg')}}" class="img-fluid rounded-start" alt="...">
                      </div>
                      <div class="col-md-8">
                        <div class="card-body">
                          <h5 class="card-title">{{ auth()->user()->name }}
                          </h5>
                          <p class="card-text">Partidas Jugadas: 0 </p>
                          <p class="card-text">Partidas Ganadas: 0 </p>
                          <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>


                          

                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
@endsection
