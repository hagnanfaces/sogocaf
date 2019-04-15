<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SOCOGHAF | @yield('title')</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700%7CVarela+Round" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />

	<!-- Owl Carousel -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}" />
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.css') }}" />

	<!-- Magnific Popup -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}" />

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>

<body>

	<!-- Header -->
	<header id="home">
		@section('bgi')
			@include('pages.index._header')
		@show
		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">
	
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo" src="{{ asset('assets/img/logo.png') }}" alt="logo">
							<img class="logo-alt" src="{{ asset('assets/img/logo-alt.png') }}" alt="logo">
						</a>
					</div>
					<!-- /Logo -->
	
					<!-- Collapse nav button -->
					<div class="nav-collapse">
						<span></span>
					</div>
					<!-- /Collapse nav button -->
				</div>
	
				<!--  Main navigation  -->
				@section('navigation')				
					<ul class="main-nav nav navbar-nav navbar-right">
						<li><a href="#home">Accueil</a></li>
						<li><a href="#about">A propos</a></li>
						<li><a href="#portfolio">Réalisations</a></li>
						<li><a href="#service">services</a></li>
						{{--  <li class="has-dropdown">
							<a href="#service">Services</a>
							<ul class="dropdown">
								<li><a href="/frfr/services/hardox">Hardox Wear Plates</a></li>
							</ul>
						</li>  --}}
						<li><a href="#team">Personnels</a></li>
						<li><a href="#contact">Contact</a></li>
						{{--  <li class="has-dropdown">
							<a href="/fr/categories">Produits</a>
							<ul class="dropdown">
								<li><a href="/hardox">Hardox</a></li>
							</ul>
						</li>  --}}
						<li><a class="btn btn-warning pull-right" href="/fr/devis#consult">Demandez un devis</a></li>		
					</ul>
				@show
				<!-- /Main navigation -->
	
			</div>
		</nav>
		<!-- /Nav -->
	
		<!-- home wrapper -->
		<div class="home-wrapper">
			<div class="container">
				<div class="row">
	
					<!-- home content -->
					<div class="col-md-10 col-md-offset-1">
						<div class="home-content">
							<h1 class="white-text">SOCOGHAF</h1>
							<p class="white-text">
								Matériaux de construction
							</p>
							{{--  <button class="white-btn">Get Started!</button>  --}}
							{{--  <button class="main-btn">Learn more</button>  --}}
						</div>
					</div>
					<!-- /home content -->
	
				</div>
			</div>
		</div>
		<!-- /home wrapper -->
	
	</header>
	<!-- /Header -->
    @yield('content')

	<!-- Footer -->
	<footer id="footer" class="sm-padding bg-dark">

		<!-- Container -->
		<div class="container">

			<!-- Row -->
			<div class="row">

				<div class="col-md-12">

					<!-- footer logo -->
					<div class="footer-logo">
						<a href="/"><img src="{{ asset('assets/img/logo-alt.png') }}" alt="logo"></a>
					</div>
					<!-- /footer logo -->

					{{--  <!-- footer follow -->
					<ul class="footer-follow">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#"><i class="fa fa-youtube"></i></a></li>
					</ul>
					<!-- /footer follow -->  --}}

					<!-- footer copyright -->
					<div class="footer-copyright">
						<p>Copyright © 2019. Tout droit reserver. Realiser par <a href="#" target="_blank">RDASERVICE</a></p>
					</div>
					<!-- /footer copyright -->

				</div>

			</div>
			<!-- /Row -->

		</div>
		<!-- /Container -->

	</footer>
	<!-- /Footer -->

	<!-- Back to top -->
	<div id="back-to-top"></div>
	<!-- /Back to top -->

	<!-- Preloader -->
	<div id="preloader">
		<div class="preloader">
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- /Preloader -->

	<!-- jQuery Plugins -->
	<script type="text/javascript" src="{{ asset('assets/js/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
