@extends('layouts.app')

@section('content')
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="pics/desk.jpg" alt="First slide">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
        <div class="carousel-caption text-left">
            <h1>Escritorios para computadoras</h1>
            <p>Escritorios, Lamparas, Cajoneras, stands.</p>
            <p><a class="btn btn-lg btn-primary" href="/escritorios" role="button">Ver productos</a></p>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="pics/keyboard.jpg" alt="First slide">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
        <div class="carousel-caption">
            <h1>Equipos de computadoras.</h1>
            <p>Computadoras laptop o escritorio</p>
            <p><a class="btn btn-lg btn-primary" href="/computadoras" role="button">Ver productos</a></p>
        </div>
        </div>
    </div>
    <div class="carousel-item">
        <img class="d-block w-100" src="pics/accesories.jpg" alt="First slide">
        <svg class="bd-placeholder-img" width="100%" height="100%" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect width="100%" height="100%" fill="#777"/></svg>
        <div class="container">
        <div class="carousel-caption text-right">
            <h1>Accesorios</h1>
            <p>Cables, Monitores, teclados, mouse, adaptadores, etc.</p>
            <p><a class="btn btn-lg btn-primary" href="/accesorios" role="button">Ver productos</a></p>
        </div>
        </div>
    </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a>
</div>

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 text-center">
        <h2 class="featurette-heading">Nuestras oficinas.</h2>
    </div>
    <div class="col-md-5">
        <img class="card-img" src="pics/oficina.jpg">
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 order-md-2 text-center">
        <h2 class="featurette-heading">Envios a todo el pais.</h2>
    </div>
    <div class="col-md-5 order-md-1">
        <img class="card-img" src="pics/pais.png">   
    </div>
    </div>

    <hr class="featurette-divider">

    <div class="row featurette">
    <div class="col-md-7 text-center">
        <h2 class="featurette-heading">Garantia de compra.</h2>
    </div>
    <div class="col-md-5">
        <img class="card-img" src="pics/garantia.png">   
    </div>
    </div>

    <hr class="featurette-divider">

    <!-- /END THE FEATURETTES -->

</div><!-- /.container -->
@endsection
