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
						<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc ornare<br />
							adipiscing nunc adipiscing. Condimentum turpis massa.</p>
						</header>
						<span class="image featured"><img src="images/pic01.png" alt="" /></span>
					</section>

					<section class="box special features">
						<div class="features-row">
							<section>
								<span class="icon major fa-bolt accent2"></span>
								<h3>Magna etiam</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-area-chart accent3"></span>
								<h3>Ipsum dolor</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
						<div class="features-row">
							<section>
								<span class="icon major fa-cloud accent4"></span>
								<h3>Sed feugiat</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
							<section>
								<span class="icon major fa-lock accent5"></span>
								<h3>Enim phasellus</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
							</section>
						</div>
					</section>

					<div class="row">
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic02.jpg" alt="" /></span>
								<h3>Sed lorem adipiscing</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
						<div class="6u 12u(narrower)">

							<section class="box special">
								<span class="image featured"><img src="images/pic03.jpg" alt="" /></span>
								<h3>Accumsan integer</h3>
								<p>Integer volutpat ante et accumsan commophasellus sed aliquam feugiat lorem aliquet ut enim rutrum phasellus iaculis accumsan dolore magna aliquam veroeros.</p>
								<ul class="actions">
									<li><a href="#" class="button alt">Learn More</a></li>
								</ul>
							</section>

						</div>
					</div>

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

				<!-- CTA -->
				<section id="cta">

					<h2>Sign up for beta access</h2>
					<p>Blandit varius ut praesent nascetur eu penatibus nisi risus faucibus nunc.</p>

					<form>
						<div class="row uniform 50%">
							<div class="8u 12u(mobilep)">
								<input type="email" name="email" id="email" placeholder="Email Address" />
							</div>
							<div class="4u 12u(mobilep)">
								<input type="submit" value="Sign Up" class="fit" />
							</div>
						</div>
					</form>

				</section>

				<!-- Footer -->
				<footer id="footer">
					<ul class="icons">
						<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
						<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
						<li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
						<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
						<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
						<li><a href="#" class="icon fa-google-plus"><span class="label">Google+</span></a></li>
					</ul>
					<ul class="copyright">
						<li>&copy; SambungAyat. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
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


