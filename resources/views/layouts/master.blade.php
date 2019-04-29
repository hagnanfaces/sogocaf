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
		<div id="bgi-slider">
			@section('bgi')
				@include('pages.index._header')
			@show
		</div>
		<!-- Nav -->
		{{--<nav id="nav" class="navbar nav-transparent fixed-nav">--}}
		<nav id="nav" class="navbar">
			<div class="container">
	
				<div class="navbar-header">
					<!-- Logo -->
					<div class="navbar-brand">
						<a href="/">
							<img class="logo shadow" src="{{ asset('assets/img/logo.png') }}" alt="SOCOGHAF">
							<img class="logo-alt" src="{{ asset('assets/img/logo-alt.png') }}" alt="SOCOGHAF">
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
					<ul class="main-nav nav navbar-nav navbar-left">
						<li><a href="#home">{{ trans('page.menu.home') }}</a></li>
						<li><a href="#about">{{ trans('page.menu.about') }}</a></li>
						<li><a href="#product">{{ trans('page.menu.product') }}</a></li>
						<li><a href="#service">{{ trans('page.menu.service') }}</a></li>
						<li><a href="#team">{{ trans('page.menu.team') }}</a></li>
						<li><a href="#contact">{{ trans('page.menu.contact') }}</a></li>
					</ul>
				@show
				<ul class="nav navbar-nav navbar-right">
					<li><a class="btn btn-warning" href="{{ route('contact') }}#consult">{{ trans('page.menu.consult') }}</a></li>
					{{--<li class="has-dropdown">
						<a class="btn pull-right" href="javascript:;"><i class="fa fa-pencil"></i></a>
						<ul class="dropdown">
							<li><a href="/fr">FR</a></li>
							<li><a href="/en">EN</a></li>
						</ul>
					</li>--}}
					{{--@foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
						<li>
							<a rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
								{{ $properties['native'] }}
							</a>
						</li>
					@endforeach--}}
					<li class="lang">
						<a href="javascript:">
							<select name="" id="lang" class="">
								<option value="fr" @if(\LaravelLocalization::getCurrentLocale() === 'fr') selected @endif >FR</option>
								<option value="en" @if(\LaravelLocalization::getCurrentLocale() === 'en') selected @endif >EN</option>
							</select>
						</a>
					</li>
				</ul>
				<!-- /Main navigation -->
	
			</div>
		</nav>
		<!-- /Nav -->
	
		<!-- home wrapper -->
		@section('home-wrapper')
			<div class="home-wrapper">
				<div class="container">
					<div class="row">

						<!-- home content -->
						<div class="col-md-10 col-md-offset-1">
							<div class="home-content">
								<h1 class="white-text">{{ trans('page.home-wrapper.title') }}</h1>
								<p class="white-text">
									{{ trans('page.home-wrapper.description') }}
								</p>
								{{--  <button class="white-btn">Get Started!</button>  --}}
								{{--  <button class="main-btn">Learn more</button>  --}}
							</div>
						</div>
						<!-- /home content -->

					</div>
				</div>
			</div>
		@show
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
						<a href="{{ route('home') }}"><img src="{{ asset('assets/img/logo-alt.png') }}" alt="SOCOGHAF"></a>
					</div>
					<!-- /footer logo -->
					
					<div class="row">
						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-phone"></i>
                                <h3 class="white-text text-uppercase text-gray">{{ trans('page.footer.contact.phone') }}</h3>
								<p>(+226) 25 34 55 94</p>
								<p>(+226) 25 41 64 62</p>
								<p>(+226) 70 14 30 40</p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-envelope"></i>
                                <h3 class="white-text">{{ trans('page.footer.contact.email') }}</h3>
                                <p><a href="mailto:info@socoghaf.com">info@socoghaf.com</a></p>
							</div>
						</div>
						<!-- /contact -->

						<!-- contact -->
						<div class="col-sm-4">
							<div class="contact">
								<i class="fa fa-map-marker"></i>
                                <h3 class="white-text">{{ trans('page.footer.contact.address') }}</h3>
								<p>Av. KADIOGO - Rue 8.31 - Quartier Gounghin - Secteur 06</p>
							</div>
						</div>
						<!-- /contact -->
					</div>

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
						{!! trans('page.footer.copyright') !!}
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
	<script type="text/javascript" src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
