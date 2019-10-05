@extends('template')

@section('header')

<div class="contenedor" id="contenedor">
		<section class="tarjeta">
			<div class="slider_banner">
				<div class="banner" id="banner">
					<img class="slide active" src="{{asset('img/banner.jpg')}}" alt="">
					<img class="slide" src="{{asset('img/banner2.jpg')}}" alt="">
					<img class="slide" src="{{asset('img/banner3.jpg')}}" alt="">
					<img class="slide" src="{{asset('img/banner4.jpg')}}" alt="">
				</div>

				<!-- Flechas del Banner -->
				<a href="" id="banner-prev" class="flecha-banner anterior"><span class="fa fa-chevron-left"></span></a>
				<a href="" id="banner-next" class="flecha-banner siguiente"><span class="fa fa-chevron-right"></span></a>
			</div>

			<section class="slider_info">
				<!-- Flechas del Slider -->
				<a href="" id="info-prev" class="flecha-info anterior" ><span class="fa fa-chevron-left"></span></a>
				<a href="" id="info-next" class="flecha-info siguiente"><span class="fa fa-chevron-right"></span></a>

				<section class="informacion" id="informacion">
					<article id="info">
						<div class="slide active">
							<h1 class="nombre">Jesús Mendoza</h1>
							<p class="trabajo">Desarrollador Web</p>
							<p class="pais"><img src="{{asset('img/bandera.png')}}" alt="">Mexico</p>
						</div>

						<div class="slide">
							<h2 class="subtitulo">Incididunt ut labore et</h2>
							<p class="texto">Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						</div>

						<div class="slide">
							<h2 class="subtitulo">Cras pretium, quam sit amet.</h2>
							<p class="texto">Nam semper, erat at eleifend pretium, sem nunc aliquam eros, ut ultricies dui felis vel augue. Etiam viverra dolor mauris, nec vehicula libero venenatis eu.
							<br><br>
							Aliquam nec tortor magna. Suspendisse condimentum feugiat malesuada. Quisque pretium ac nulla vitae tristique. Vivamus fringilla purus ut viverra porta.</p>
						</div>
					</article>
					<div class="botones" id="botones"></div>
				</section>

			</section>
            <section class="redes_sociales">
                <a href="https://www.linkedin.com/in/jes%C3%BAsmendoza22/" class="linkedin"><span class="fab fa-linkedin"></span></a>
                <a href="https://github.com/Chucky22Mendoza" class="github"><span class="fab fa-github"></span></a>
                <a href="https://twitter.com/MidgardSW" class="twitter"><span class="fab fa-twitter"></span></a>
                <a href="https://www.facebook.com/profile.php?id=100033779143416" class="facebook"><span class="fab fa-facebook"></span></a>
            </section>
        </section>
    </div>

@endsection