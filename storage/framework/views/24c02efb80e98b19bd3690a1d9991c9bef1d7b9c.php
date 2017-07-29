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
  <link rel="stylesheet" href="<?php echo e(URL::asset('css/main.css')); ?>" />
  <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
</head>
<body>
  <div id="page-wrapper">

    <!-- Header -->
    <header id="header">
      <h1><a href="<?php echo e(route('/home')); ?>">SambungAyat</a></h1>
      <nav id="nav">
        <ul>
          <li><a href="<?php echo e(route('/home')); ?>">Beranda</a></li>
          <li><a href="<?php echo e(route('/contact')); ?>">Hubungi Kami</a></li>
          <li><a href="<?php echo e(route('/registrasi')); ?>" class="button">Daftar</a></li>
        </ul>
      </nav>
    </header>

    <!-- Main -->
    <section id="main" class="container 50%">
      <header>
        <h2>Login</h2>
      </header>
      <div class="box">
        <form method="post" action="#">
          <?php if(Session::has('flash_message')): ?>
              <div class="alert alert-success">
                  <?php echo e(Session::get('flash_message')); ?>

              </div>
          <?php endif; ?>
          <br/>
          <input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>">

          <div class="row uniform 50%">
            <div class="12u">
              <input type="text" name="username" value="" placeholder="username" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('username') ?>
              
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <input type="password" name="password" value="" placeholder="password" />
            </div>
          </div>

          <div class="row uniform 50%">
            <div class="12u">
              <?php echo $errors->first('password') ?>
              <?php echo $errors->first('wrong_username') ?>
              <?php echo $errors->first('wrong_password') ?>
            </div>
          </div>

          <div class="row uniform">
            <div class="12u">
              <ul class="actions align-center">
                <li><input type="submit" value="Login" /></li>
              </ul>
            </div>
          </div>
          <div class="row uniform">
            <div class="12u">
              <ul class="actions align-center">
                <li><p> Belum punya akun? <a href="<?php echo e(route('/registrasi')); ?>"> Daftar disini</a> </p></li>
              </ul>
            </div>
          </div>
        </form>
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
  <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.dropotron.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/jquery.scrollgress.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/skel.min.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/util.js')); ?>"></script>
  <script type="text/javascript" src="<?php echo e(URL::asset('js/main.js')); ?>"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>