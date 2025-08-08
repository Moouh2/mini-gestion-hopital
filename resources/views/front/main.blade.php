@extends('front.index')
@section('contenu')
<br>
<main>
    <div class="container">
        <div class="row">
      
          <!-- First column -->
          <div class="col-md">
      
            <!-- Card -->
            <div class="card w-50 h-55"> <!-- Ajout des classes w-75 et h-75 pour définir la largeur et la hauteur -->
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="front/img/admin.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">ADMIN</h5>
                <a href="{{ route('login') }}" class="btn btn-primary btn-sm btn-block d-flex align-items-center justify-content-center">Login</a>
              </div>
            </div>
            <!-- Card -->
      
          </div>
          <!-- First column -->
      
          <!-- Second column -->
          <div class="col-md">
      
            <!-- Card -->
            <div class="card w-50 h-55"> <!-- Ajout des classes w-75 et h-75 pour définir la largeur et la hauteur -->
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="front/img/secrétaire.jpg" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">SECRETAIRE</h5>
                <a href="#!" class="btn btn-primary btn-sm btn-block d-flex align-items-center justify-content-center">Login</a>
              </div>
            </div>
            <!-- Card -->
      
          </div>
          <!-- Second column -->
      
          <!-- Third column -->
          <div class="col-md">
      
            <!-- Card -->
            <div class="card w-50 h-55"> <!-- Ajout des classes w-75 et h-75 pour définir la largeur et la hauteur -->
              <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                <img src="front/img/doctor.png" class="img-fluid" />
                <a href="#!">
                  <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                </a>
              </div>
              <div class="card-body">
                <h5 class="card-title text-center">DOCTEUR</h5>
                <a href="#!" class="btn btn-primary btn-sm btn-block d-flex align-items-center justify-content-center">Login</a>
              </div>
            </div>
            <!-- Card -->
      
          </div>
          <!-- Third column -->
      
        </div>
      </div>
      
</main>
<br>
@endsection