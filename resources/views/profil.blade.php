
  <body class="hold-transition skin-blue sidebar-mini" style="background-color: #ecf0f5;">
       <p>Setelah Mengisi Profil anda akan dikeluarkan secara otomatis. silahkan login kembali<p>
        <div class='container' style="margin-top: 60px; min-height:550px">
            <div class='col-md-2'></div>
            <div class='col-md-8'>
                <br/>
                <center><h2 class="title-index">Isi Profil</h2></center>
                <br/>

                <form class="form-horizontal" method="post" action="">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                  <div class="form-group">
                    <label class="control-label col-sm-3">Alamat:</label>
                    <div class="col-sm-6">
                      <input class="form-control" name="alamat">
                    </div>
                    <div class='col-sm-3'>
          
                          <?php echo $errors->first('alamat') ?>
                         
                    </div>
                  </div>
                  
					 <div class="form-group">
						    <label class="control-label col-sm-3">Waktu Bimbingan : </label>
						    <div class="col-sm-6">
						      <div class="input-group date" data-provide="datepicker" data-date-autoclose="true"  data-date-format="yyyy-mm-dd">
								    <input type="text" class="form-control" name="tanggal">
								    <div class="input-group-addon">
								        <i class="fa fa-calendar"></i>
								    </div>
								</div>
						    </div>
						  </div>
			  
                 
                  <center><button class="btn btn-primary" type="submit">Daftar</button></center>
                </form>
            </div>
            <div class='col-md-2'></div>
        </div>
	