<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | BitShop</title>
    <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('css/animate.css')}}" rel="stylesheet">
	  <link href="{{asset('css/main.css')}}" rel="stylesheet">
	  <link href="{{asset('css/responsive.css')}}" rel="stylesheet">
	  <link href="{{asset('css/lity.min.css')}}" rel="stylesheet">
</head><!--/head-->
<body>
		<div class="header-middle"><!--header-middle-->
		 	<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="{{url('product')}}"><img src="{{asset('images/home/logo1.png')}}" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								@if(Auth::check())
								<li><a href="{{ route('home') }}"><i class="fa fa-user"></i> My Account</a></li>
								<li><a href="{{ route('logout') }}"
								onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
								<i class="fa fa-credit-card"></i> Logout</a></li>
								<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                 					@csrf
            					</form>
								@else
								<li><a href="{{ route('about') }}"><i class="fa fa-crosshairs"></i> about</a></li>
								<li><a href="{{ route('login') }}"><i class="fa fa-lock"></i> Login</a></li>
								<li><a href="{{ route('register') }}"><i class="fa fa-user"></i> Register</a></li>
								@endif
								
							</ul>
							
						</div>
					</div>
				</div>
			</div>
		</div>

        <main class="py-4">
            @yield('content')
        </main>

        <footer id="footer">
		<div class="footer-bottom">
			<div class="container">
				<div class="row">
					<p class="pull"> <center>Business Information Technology | Pongsawadi Technological College</center> </p>
				</div>
			</div>
		</div>
	</footer><!--/Footer-->

  	<script src="{{asset('js/jquery.js')}}"></script>
	<script src="{{asset('js/bootstrap.min.js')}}"></script>
	<script src="{{asset('js/jquery.scrollUp.min.js')}}"></script>
	<script src="{{asset('js/price-range.js')}}"></script>
  	<script src="{{asset('js/jquery.prettyPhoto.js')}}"></script>
	  <script src="{{asset('js/main.js')}}"></script>
	  <script src="{{asset('js/lity.min.js')}}" defer></script>
</body>
</html>