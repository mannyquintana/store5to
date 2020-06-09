@extends('layouts.app')

@section('content')
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->

<div class="container marketing top-padding">

    <!-- Three columns of text below the carousel -->
    <div class="row">
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="pics/escritorio_mini.jpg" width="100%" height="100%"/></svg>
        <h2>Escritorios</h2>
        <p>El escritorio es la parte más importante en una oficina, aquella en la que realizamos nuestras labores y donde, en ocasiones, nacen las obras de nuestra inspiración.</p>
        <p><a class="btn btn-secondary" href="/escritorios" role="button">Ver Productos &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="pics/computadoras_mini.jpg" width="100%" height="100%"/></svg>
        <h2>Computadoras</h2>
        <p>Las PC de Escritorio son una herramienta básica en la vida de cualquier persona, han demostrado con el paso de los años que son imprescindibles.</p>
        <p><a class="btn btn-secondary" href="/computadoras" role="button">Ver Productos &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-4">
        <svg class="bd-placeholder-img rounded-circle" width="140" height="140" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 140x140"><image xlink:href="pics/accesorios_mini.jpg" width="100%" height="100%"/></svg>
        <h2>Accesorios</h2>
        <p>Equipa tu computadora y laptop con los accesorios para Computación que tenemos a la venta: desde teclados inalámbricos, routers, repetidores de señal Wi-fi, mouse, audífonos, bocinas y mucho más.</p>
        <p><a class="btn btn-secondary" href="/accesorios" role="button">Ver Productos &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    </div><!-- /.row -->

@endsection
