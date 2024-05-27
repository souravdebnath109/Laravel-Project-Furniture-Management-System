<!-- /*
* Bootstrap 5
* Template Name: Furni
* Template Author: Untree.co
* Template URI: https://untree.co/
* License: https://creativecommons.org/licenses/by/3.0/
*/ -->
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="{{config('app.url')}}/Frontend/favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="bootstrap, bootstrap4" />

		<!-- Bootstrap CSS -->
		<link href="{{config('app.url')}}/Frontend/css/bootstrap.min.css" rel="stylesheet">
		<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
		<link href="{{config('app.url')}}/Frontend/css/tiny-slider.css" rel="stylesheet">
		<link href="{{config('app.url')}}/Frontend/css/style.css" rel="stylesheet">
		<title>FurniXure</title>
	</head>

	<body>

		<!-- Start Header/Navigation -->
		<nav class="custom-navbar navbar navbar navbar-expand-md navbar-dark bg-dark" arial-label="Furni navigation bar">

			<div class="container">
				{{-- <a class="navbar-brand" href="{{url('/index')}}">Furni<span>.</span></a> --}}
				<a class="navbar-brand" href=     "{{ url('/index') }}">Furnixar<span>.</span></a>


				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsFurni" aria-controls="navbarsFurni" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarsFurni">
					<ul class="custom-navbar-nav navbar-nav ms-auto mb-2 mb-md-0">
						<li class="nav-item @if(Request::segment(1)=='index') active @endif">
							<a class="nav-link" href="{{url('/index')}}">Home</a>
						</li>
						<li class="@if(Request::segment(1)=='shop') active @endif"><a class="nav-link"  href="{{url('/shop')}}">Shop</a></li>
						<li class="@if(Request::segment(1)=='shop') active @endif"><a class="nav-link"  href="{{url('/chatify')}}">Chat</a></li>

						<li class="@if(Request::segment(1)=='about_us') active @endif"><a class="nav-link" href="{{url('/about_us')}}">About us</a></li>
						<li class="@if(Request::segment(1)=='services') active @endif"><a class="nav-link" href="{{url('/services')}}">Services</a></li>
						<li class="@if(Request::segment(1)=='blog') active @endif"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
						<li class="@if(Request::segment(1)=='contact_us') active @endif"><a class="nav-link" href="{{url('/contact_us')}}">Contact us</a></li>
					</ul>

					<ul class="custom-navbar-cta navbar-nav mb-2 mb-md-0 ms-5">
						@if(Auth::user())<li><a class="nav-link" href="{{url('/login')}}"><i class="fas fa-user-cog"></i> Dashboard</a></li>
						<li><a class="nav-link" href="{{url('/logout')}}"><i class="fas fa-sign-out-alt"></i>Logout</a></li>
						<li><a class="nav-link" href="{{url('/_user/cart')}}"><img src="{{config('app.url')}}/Frontend/images/cart.svg"></a></li>
						@else
						<li><a class="nav-link" href="{{url('/login')}}"><img src="{{config('app.url')}}/Frontend/images/user.svg">Login</a></li>
						
						@endif
					</ul>
				</div>
			</div>
				
		</nav>
		<!-- End Header/Navigation -->