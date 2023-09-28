@extends('layouts.master')

@section('contenido')

<body style="background-color: lightblue">
    <div class="container-fluid d-flex flex-column justify-content-lg-center">
        <div class="row ">
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

        
    </div>

  <!-- jQuery -->
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/popper.js@2.11.6/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.5.0/dist/js/bootstrap.min.js"></script>

    
</body>
@endsection



