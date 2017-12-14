<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>eNote </title>

	<!-- Bootstrap -->
	<link href="{{asset('new/vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
	<!-- Font Awesome -->
	<link href="{{asset('new/vendors/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
	<!-- NProgress -->
	<link href="{{asset('new/vendors/nprogress/nprogress.css')}}" rel="stylesheet">

	<!-- Custom Theme Style -->
	<link href="{{asset('new/build/css/custom.min.css')}}" rel="stylesheet">
</head>
<body class="nav-md">
	<div id="welcome">
		<div class="container body">
	    <div class="main_container">
	      <div class="col-md-2 left_col">
	        <div class="left_col scroll-view">
	          <div class="navbar nav_title" style="border: 0;">
	            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>eNote</span></a>
	          </div>

	          <div class="clearfix"></div>

	          <!-- menu profile quick info -->
	          @yield('profil')
	          <!-- /menu profile quick info -->

	          <br />

	          <!-- sidebar menu -->
	          @yield('sidebar')
	          <!-- /sidebar menu -->
	        </div>
	      </div>

	      <!-- top navigation -->
				@if (Route::has('login'))
								@if (Auth::check())
								<div class="top_nav">
									<div class="nav_menu">
										<nav>
											<div class="nav toggle">
				                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
				              </div>
											<ul class="nav navbar-nav navbar-right">
												<li class="">
												@if (Auth::guest())
												<li><a href="{{ route('login') }}">Login</a></li>
												<li><a href="{{ route('register') }}">Register</a></li>
										@else
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																{{ Auth::user()->name }} <span class="caret"></span>
														</a>

														<ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
																<li>
																		<a href="{{ route('logout') }}"
																				onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																				Logout
																		</a>

																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																				{{ csrf_field() }}
																		</form>
																</li>
														</ul>
												</li>
										@endif
									</li>
											</ul>
										</nav>
									</div>
								</div>
								@else
								<div class="top_nav">
										<nav>
											<ul class="nav navbar-nav navbar-right">
												<li class="">
												@if (Auth::guest())
												<li><a href="{{ route('login') }}">Login</a></li>
												<li><a href="{{ route('register') }}">Register</a></li>
										@else
												<li class="dropdown">
														<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
																{{ Auth::user()->name }} <span class="caret"></span>
														</a>

														<ul class="dropdown-menu dropdown-usermenu pull-right" role="menu">
																<li>
																		<a href="{{ route('logout') }}"
																				onclick="event.preventDefault();
																								 document.getElementById('logout-form').submit();">
																				Logout
																		</a>

																		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
																				{{ csrf_field() }}
																		</form>
																</li>
														</ul>
												</li>
										@endif
									</li>
											</ul>
										</nav>
								</div>
								@endif
				@endif
	      <!-- /top navigation -->

	      <!-- page content -->
	      @yield('content')
	      <!-- /page content -->

	      <!-- footer content -->
				@yield('footer')
	      <!-- /footer content -->

	    </div>
	  </div>
</div>
	  <!-- jQuery -->
	  <script src="{{asset('new/vendors/jquery/dist/jquery.min.js')}}"></script>
	  <!-- Bootstrap -->
	  <script src="{{asset('new/vendors/bootstrap/dist/js/bootstrap.min.js')}}"></script>
	  <!-- FastClick -->
	  <script src="{{asset('new/vendors/fastclick/lib/fastclick.js')}}"></script>
	  <!-- NProgress -->
	  <script src="{{asset('new/vendors/nprogress/nprogress.js')}}"></script>
	  <!-- validator -->
	  <script src="{{asset('new/vendors/validator/validator.js')}}"></script>

	  <!-- Custom Theme Scripts -->
	  <script src="{{asset('new/build/js/custom.min.')}}"></script>

	</body>
</html>
