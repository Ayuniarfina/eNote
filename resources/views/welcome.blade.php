<!DOCTYPE HTML>
<html lang="{{ app()->getLocale() }}">
    <head>
      <title>Road Trip by TEMPLATED</title>
  		<meta charset="utf-8" />
  		<meta name="viewport" content="width=device-width, initial-scale=1" />
  		<link href="{{asset('depan/assets/css/main.css')}}" rel="stylesheet" />
  	</head>
  	<body>
      <header id="header">
        <div class="logo"><a href="index.html">Road Trip <span>by TEMPLATED</span></a></div>
        <a href="#menu"><span>Menu</span></a>
      </header>

      <nav id="menu">
        <ul class="links">
          <li><a href="{{ url('/login') }}">Login</a></li>
          <li><a href="{{ url('/register') }}">Register</a></li>
        </ul>
      </nav>

      <section id="banner" class="bg-img" data-bg="banner.jpg">
				<div class="inner">
					<header>
						<h1>eNote</h1>
					</header>
				</div>
				<a href="#one" class="more">Learn More</a>
			</section>

      <!-- Scripts -->
        <script src="{{asset('depan/assets/js/jquery.min.js')}}"></script>
        <script src="{{asset('depan/assets/js/jquery.scrolly.min.js')}}"></script>
        <script src="{{asset('depan/assets/js/jquery.scrollex.min.js')}}"></script>
        <script src="{{asset('depan/assets/js/skel.min.js')}}"></script>
        <script src="{{asset('depan/assets/js/util.js')}}"></script>
        <script src="{{asset('depan/assets/js/main.js')}}"></script>

    </body>
</html>
