<!DOCTYPE HTML>
<!--
	Alpha by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<title>@yield('title')</title>
		
		

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<!-- main css -->
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		
	</head>
	<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="{{ route('/') }}">SambungAyat</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{{ route('/') }}">Menu</a></li>				
							<li>
								<a href="#" class="icon fa-user">
									<?php 
										if(isset($_SESSION["user"])){
										    
										    echo   $_SESSION["user"];
										}
										            //jika belum login
										else {
										    
										   header( "refresh:0;/login" );
										   return "";
										}
									?>
								</a>
								<ul>
									<li><a href="#">Lihat Profil</a></li>
								</ul>	
							</li>
							<li><a href="{{ route('/logout') }}" class="button">Logout</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					@yield('content')
				</section>

			<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; SambungAyat.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>
				</footer>

		</div>

		<!-- Scripts -->
			<script type="text/javascript" src="{{ URL::asset('js/jquery.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/jquery.dropotron.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/jquery.scrollgress.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/skel.min.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/util.js') }}"></script>
			<script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

			<!-- Latest compiled and minified JavaScript -->
			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>


	</body>
</html>


