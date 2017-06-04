
 <a a href= "{{ route('/login') }}">
		Login
		
	</a>
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5;">
       
        <div class='container' style="margin-top: 60px; min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <br/>
                <center><h2 class="title-index">Registrasi</h2></center>
                <br/>

                <form class="form-horizontal" method="post" action="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Username:</label>
                    <div class="col-sm-6">
                      <input class="form-control" name="username">
                    </div>
                    <div class='col-sm-3'>
          
                          <?php echo $errors->first('username') ?>
                          <?php echo $errors->first('duplicate_username') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="email" name="email">
                    </div>
                    <div class='col-sm-3'>
                          <?php echo $errors->first('email') ?>
                    </div>

                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Password:</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="password" name="password" >
                    </div>
                    <div class='col-sm-3'>
                          <?php echo $errors->first('password') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Password Confirmation:</label>
                    <div class="col-sm-6">
                      <input class="form-control" type="password" name="password_confirmation">
                    </div>
                    <div class='col-sm-3'>
                          <?php echo $errors->first('password_confirmation') ?>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="control-label col-sm-3">Nama Lengkap</label>
                    <div class="col-sm-6">
                      <input class="form-control" name="nama_lengkap">
                    </div>
                    <div class='col-sm-3'>
                          <?php echo $errors->first('nama_lengkap') ?>
                    </div>
                  </div>
                  
                  <center><button class="btn btn-primary" type="submit">Daftar</button></center>
                </form>
            </div>
            <div class='col-md-2'></div>
        </div>
	