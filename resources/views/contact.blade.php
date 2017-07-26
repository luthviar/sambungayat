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
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- main css -->
		<link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
	</head>
		<body>
		<div id="page-wrapper">

			<!-- Header -->
				<header id="header">
					<h1><a href="{{ route('/home') }}">SambungAyat</a></h1>
					<nav id="nav">
						<ul>
							<li><a href="{{ route('/home') }}">Beranda</a></li>
							<li><a href="{{ route('/contact') }}">Hubungi Kami</a></li>
							<li><a href="{{ route('/login') }}" class="button">Login</a></li>
						</ul>
					</nav>
				</header>

			<!-- Main -->
				<section id="main" class="container 75%">
					<header>
						<h2>Hubungi Kami</h2>
						<p>Dengan senang hati kami akan membantu anda.</p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="row uniform 50%">
								<div class="6u 12u(mobilep)">
									<input type="text" name="name" id="name" value="" placeholder="Nama" />
								</div>
								<div class="6u 12u(mobilep)">
									<input type="email" name="email" id="email" value="" placeholder="Email" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<input type="text" name="subject" id="subject" value="" placeholder="Judul" />
								</div>
							</div>
							<div class="row uniform 50%">
								<div class="12u">
									<textarea name="message" id="message" placeholder="Pesan" rows="6"></textarea>
								</div>
							</div>
							<br/>
							<div id="other" class="alert alert-danger">
							  	<strong>Perhatian!</strong> Silahkan kirim pesan melalui email.
							</div>
							<div class="row uniform">
								<div class="12u">
									<ul class="actions align-center">
										<li><input type="button" id="buttonSubmit" value="Kirim Pesan" /></li>
									</ul>
								</div>
							</div>
						</form>
					</div>


					<div class="box">
						<div class="row">
							<div class="6u 12u(mobilep)">
								<h3>Alamat</h3>
								<p>Depok, Jawa Barat, Indonesia.</p>
							</div>
							<div class="6u 12u(mobilep)">
								<h3>Kontak</h3>
								<p>Telepon : - <br> Email : mhd.luqmanhakim@outlook.co.id</p>
							</div>
						</div>
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3965.206110541686!2d106.8347812143143!3d-6.367366995392426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69ec13c9e63305%3A0x3b70d402caf4b8fd!2sJl.+Kedoya+Raya+No.55%2C+Pd.+Cina%2C+Beji%2C+Kota+Depok%2C+Jawa+Barat+16424!5e0!3m2!1sid!2sid!4v1496623369392" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
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

			<script type="text/javascript">
				$(document).ready(function() {
					$('#other').hide();
					$('#buttonSubmit').click(function(){
				    	$('#other').show();
					});
					
				});
			</script>

	</body>
</html>