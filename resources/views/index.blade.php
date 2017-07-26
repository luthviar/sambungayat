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
	<title>SambungAyat</title>

	<!-- main css -->
	<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body class="landing">
	<div id="page-wrapper">

		<!-- Header -->
		<header id="header" class="alt">
			<h1><a href="{{ route('/home') }}">SambungAyat</a></h1>
			<nav id="nav">
				<ul>
					<li><a href="{{ route('/home') }}">Beranda</a></li>
					<li><a href="{{ route('/contact') }}">Hubungi Kami</a></li>
					<li><a href="{{ route('/registrasi') }}" class="button">Daftar</a></li>
				</ul>
			</nav>
		</header>

		<!-- Banner -->
		<section id="banner">
			<h2>SambungAyat</h2>
			<p>Permainan menyenangkan yang akan membantu anda mengingat kembali hafalan Al-Qur'an</p>
			<ul class="actions">
				<li><a href="{{ route('/login') }}" class="button special">Main sekarang</a></li>
			</ul>
		</section>

		<!-- Main -->
		<section id="main" class="container">

			<section class="box special">
				<header class="major">
					<h2>Introducing the ultimate website app
						<br />
						for having fun and staying close with Al-Qur'an</h2>
						</header>
						<span class="image featured"><img src="images/pic01.png" alt="" /></span>
					</section>

									

					<section class="box special">
						<header class="major">
							<h2>Cara Bermain</h2>
						</header>
						<div class="video-container">
							<iframe width="854" height="480" src="https://www.youtube.com/embed/KF3-4TYQV0s" frameborder="0" allowfullscreen></iframe>
						</div>
						<style type="text/css">
							.video-container {
								position:relative;
								padding-bottom:56.25%;
								padding-top:30px;
								height:0;
								overflow:hidden;
							}

							.video-container iframe, .video-container object, .video-container embed {
								position:absolute;
								top:0;
								left:0;
								width:100%;
								height:100%;
							}
						</style>	
					</section>

					

				</section>

				<!-- Footer -->
				<footer id="footer">
					<ul class="copyright">
						<li>&copy; SambungAyat</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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

		</body>
		</html>


