<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>SOCOGAF | @yield('title')</title>

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
		<!-- Background Image -->
		<div class="bg-img" style="background-image: url('{{ asset("assets/img/background1.jpg")}}');">
			<div class="overlay"></div>
		</div>
		<!-- /Background Image -->

		<!-- Nav -->
		<nav id="nav" class="navbar nav-transparent">
			<div class="container">

				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="index.html">
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
				<ul class="main-nav nav navbar-nav navbar-right">
					<li><a href="#home">Accueil</a></li>
					<li><a href="#about">A propos</a></li>
					<li><a href="#portfolio">Réalisation</a></li>
					<li><a href="#service">Services</a></li>
					{{--  <li><a href="#pricing">Prices</a></li>  --}}
					<li><a href="#team">Personnel</a></li>
					{{--  <li class="has-dropdown"><a href="#blog">Blog</a>
						<ul class="dropdown">
							<li><a href="/blog">blog post</a></li>
						</ul>
					</li>  --}}
					<li><a href="#contact">Contact</a></li>
				</ul>
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
							<h1 class="white-text">SOCOGAF</h1>
							<p class="white-text">
                                Materiaux de construction
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
						<a href="index.html"><img src="{{ asset('assets/img/logo-alt.png') }}" alt="logo"></a>
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
						<p>Copyright © 2019. Tout droit reserver. Realiser par <a href="#" target="_blank">A.K.A</a></p>
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
