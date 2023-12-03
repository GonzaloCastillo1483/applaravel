@extends('layouts.master')

@section('contenido')

<body style="background: linear-gradient(to bottom, #660066 0%, #ff99cc 100%);">
    <div class="container-fluid d-flex flex-column justify-content-lg-center">
                            @if(session('success'))
                              <div class="alert alert-success">
                                  {{ session('success') }}
                              </div>
                            @endif

        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6 mt-5 justify-content-lg-center">
                <div id="carrusel1" class="carousel slide"  style="width: 650px">
                    
                    


                  <div class="container-fluid">
                    <div id="carouselExampleRide" class="carousel slide" data-bs-ride="true">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img src="{{asset('images/shawshaw.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('images/pelu.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>
                        <div class="carousel-item">
                        <img src="{{asset('images/booz.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="{{asset('images/akita.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="{{asset('images/luna.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="{{asset('images/nose.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="{{asset('images/sofy.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>

                        <div class="carousel-item">
                          <img src="{{asset('images/toby.jpg')}}" class="d-block d-flex img-fluid flex-fill imagen-banner" alt="...">
                        </div>








                          



                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleRide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>
                </div>
            </div>
           
        </div>

        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4 mt-5 justify-content-lg-center">
          <div class="row">
            <div class="card border-end">
              <div class="card-header">
                The Good Pets, la mejor peluqueria canina.
              </div>
              <div class="card-body">
                <h4>¿Quienes somos?</h4>
                <span>The Good Pets Peluquería Canina, un emprendimiento inaugurado en 2021 por Maribel. En nuestra peluqueria, nos dedicamos a realzar la belleza y bienestar de cada mascota, brindando servicios personalizados. Utilizamos productos de alta calidad y técnicas cuidadosas. Nos esforzamos por crear un ambiente tranquilo y amigable para cada peludo cliente. En The Good Pets Peluquería Canina,  priorizamos el respeto y cariño en cada tratamiento. Confía en nosotros para proporcionar a tu compañero peludo una experiencia positiva y relajante. </span>
              </div>
            </div>

          </div>
          <div class="row mt-5">
            <div class="card">
              <div class="card-header">
                Contactanos
              </div>
              <div class="card-body">
                <h4>Redes Sociales</h4>
                <div class="col">
                  <img src="https://img.freepik.com/vector-premium/logotipo-redes-sociales-degradado-purpura_197792-1883.jpg"  width="50" height="50">
                  <a href="https://www.instagram.com/thegoodpets___/" style="text-decoration-color: black">Instagram</a>
                </div>

                <div class="col">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/WhatsApp_icon.png/598px-WhatsApp_icon.png"  width="50" height="50" >
                  <span>+56 9 74301114</span>
                </div>

                <div class="col">
                  <img src="https://upload.wikimedia.org/wikipedia/commons/6/6c/Facebook_Logo_2023.png"  width="50" height="50">
                  <a href="https://www.facebook.com/maribel.bernal.58/" style="text-decoration-color: black">Facebook</a>
                </div>
                
              </div>
            </div>

          </div>
          
        </div>

        
    </div>

  <!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    
</body>
@endsection



