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
<body>
  <div id="page-wrapper">

    <!-- Header -->
    <header id="header">
      <h1><a href="{{ route('/home') }}">SambungAyat</a></h1>
      <nav id="nav">
        <ul>
          <li><a href="{{ route('/home') }}">Home</a></li>
          <li><a href="{{ route('/contact') }}">Hubungi Kami</a></li>
          <li>
            <a href="#" class="icon fa-angle-down">Layouts</a>
            <ul>
              <li><a href="generic.html">Generic</a></li>
              <li><a href="contact.html">Contact</a></li>
              <li><a href="elements.html">Elements</a></li>
              <li>
                <a href="#">Submenu</a>
                <ul>
                  <li><a href="#">Option One</a></li>
                  <li><a href="#">Option Two</a></li>
                  <li><a href="#">Option Three</a></li>
                  <li><a href="#">Option Four</a></li>
                </ul>
              </li>
            </ul>
          </li>
          <li><a href="{{ route('/login') }}" class="button">Login</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main -->
    <section id="main" class="container 50%">
      <header>
        <h2>Daftar</h2>
      </header>
      <div class="box">
        <form method="post" action="#">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
          
          <div class="row uniform 50%">
            <div class="12u">
              <input type="text" name="nama_lengkap" value="" placeholder="Nama Lengkap" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('nama_lengkap') ?>
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <input type="email" name="email" value="" placeholder="Email" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('email') ?>
            </div>
          </div>


          <div class="row uniform 50%">
            <div class="12u">
              <input type="text" name="username" value="" placeholder="Username" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('username') ?>
              <?php echo $errors->first('duplicate_username') ?>
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <input type="password" name="password" value="" placeholder="Password" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('password') ?>
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <input type="password" name="password_confirmation" value="" placeholder="Ulangi password" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('password_confirmation') ?>
            </div>
          </div>

          <div class="row uniform">
            <div class="12u">
              <ul class="actions align-center">
                <li><input type="submit" value="Daftar" /></li>
              </ul>
            </div>
          </div>
          <div class="row uniform">
            <div class="12u">
              <ul class="actions align-center">
                <li><p> Sudah punya akun? <a href="{{ route('/login') }}"> Login disini</a> </p></li>
              </ul>
            </div>
          </div>
        </form>


      </div>

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