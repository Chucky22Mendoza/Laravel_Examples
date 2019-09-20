@extends('template')

@section('header')
<h1>NOTICIAS DE ÚLTIMO MINUTO</h1>

<section>
    <article class="row col-md-12 d-flex justify-content-center">
            <div class="card bg-primary text-center col-md-3 mx-2" style="width: 18rem;">
                <div class="card-header">
                    <h3>Amazonas</h3>
                </div>
                <img src="{{asset('img/amazonas.jfif')}}" width="100%">
                <div class="card-body">
                    <p class="card-text">El amazonas sigue en peligro. El gobieron de Brasil no quiere aceptar ayuda externa.</p>
                </div>
                <footer class="blockquote-footer"><cite title="Source Title">20/09/2019 09:18 am</cite></footer>
            </div>
            <div class="card bg-primary text-center col-md-3 mx-2" style="width: 18rem;">
                <div class="card-header">
                    <h3>React Native</h3>
                </div>
                <img src="{{asset('img/react.png')}}" width="100%">
                <div class="card-body">
                    <p class="card-text">React Native es una herramienta de JavaScript que está volviendo locos a todos los fanáticos de las aplicaciones móviles.</p>
                </div>
                <footer class="blockquote-footer"><cite title="Source Title">20/09/2019 02:40 am</cite></footer>
            </div>
            <div class="card bg-primary text-center col-md-3 mx-2" style="width: 18rem;">
                <div class="card-header">
                    <h3>Ubuntu 19.04</h3>
                </div>
                <img src="{{asset('img/ubuntu.jfif')}}" width="100%">
                <div class="card-body">
                    <p class="card-text">Se lanza Ubuntu 19.04, distribución de Linux basada en Debian, dejando atrás las barras oscuras.</p>
                </div>
                <footer class="blockquote-footer"><cite title="Source Title">19/09/2019 10:23 pm</cite></footer>
            </div>
    </article>
</section>
@endsection