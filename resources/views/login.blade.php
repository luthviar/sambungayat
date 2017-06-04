
 
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5;">
       
        <div class='container' style=" min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <br><br><br>
                <br><br><br>
                <center><h2 class="title-index">Login</h2></center>
                <br/>

                <form class="form-horizontal"  method="post" action="">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                      <div class="form-group">
                        <label class="control-label col-sm-3">Username:</label>
                        <div class="col-sm-6">
                          <input class="form-control" name="username">
                        </div>
                        <div class='col-sm-3'>
                          <?php echo $errors->first('username') ?>
                          <?php echo $errors->first('wrong_username') ?>
						     <?php echo $errors->first('wrong_password') ?>
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-sm-3">Password:</label>
                        <div class="col-sm-6">
                          <input class="form-control" type="password" name="password">
                        </div>
                        <div class='col-sm-3'>
                          <?php echo $errors->first('password') ?>
                       
                    </div>
                      </div>
                      <center><button class="btn btn-primary" type="submit">Login</button></center>
                </form>

                <center><i><h6>belum punya akun? daftar <a href="{{ route('/registrasi') }}">disini</a></h6></i></center>
            </div>
           
       