@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')
<header>
<h1 style="font-size: 300%;" class="text-center">
    	<?php 
	    if(isset($_SESSION["user"])){  
	        echo   "Yuk ber-Muhasabah, " . $_SESSION["user"]. "!";
	    }
	                        //jika belum login
	    else {
	     header( "refresh:0;login" );
	     return "";
		 }
		 ?>
     </h1>
     </header>
<section class="box">

    
    
	<div class="row">
		<div class="box alt">
			<h1 style="font-size: 200%;" class="text-center">Your Last Play : Yesterday</h1>
			<h6 style="font-size: 100%;" class="text-center">(Sabtu, 29 July 2017, 22:10)</h6>
			<br>
	        <div class="row no-collapse 50% uniform">
		        <div class="12u">
			            <div style="background-color: #f39c12;" class="panel panel-default">
						  <div class="panel-body">
						    <h1 
						    	class="text-center" 
						    	style="font-size: 200%; color: white; margin: 0;">
						    		150 total pertanyaan terjawab
						    </h1> 						   
						  </div>
						</div>

		        </div>

	            <div class="6u">
		            <div style="background-color: #27ae60;" class="panel panel-default">
					  <div class="panel-body">
					    <h1 
					    	class="text-center" 
					    	style="font-size: 700%; color: white; margin: 0;">
					    		120 
					    		<i style="color: white;" class="fa fa-check-circle-o fa-1x" aria-hidden="true"></i> 
					    </h1> 
					    <p style="color: white; margin: 0;" class="text-center">
					    	pertanyaan benar terjawab
					    </p>
					  </div>
					</div>

	            </div>

	            <div class="6u">
		            <div style="background-color: #f07543;" class="panel panel-default">
					  <div class="panel-body">
					    <h1 
					    	class="text-center" 
					    	style="font-size: 700%; color: white; margin: 0;">
					    		<i style="color: white;" class="fa fa-times-circle-o fa-1x" aria-hidden="true"></i> 
					    		30 
					    		
					    </h1> 
					    <p style="color: white; margin: 0;" class="text-center">
					    	pertanyaan salah terjawab
					    </p>
					  </div>
					</div>
					
	            </div>
	            <br>

	            <!-- list kesalahan -->
	            <div class="12u">
		            <div style="background-color: #f07543;" class="panel panel-default">
					  <div class="panel-body">
					  	<div class="col-md-4">
					  		<h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Surat ke :  114	
						    </h1> 
						    <h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Nama Surat : An - Nas
						    </h1> 
						     <h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Ayat ke : 4
						    </h1>

				    
						</div>
						<div class="col-md-8">
							<img width="100%" height="100%" src="{{ URL::asset('images/ayat1.png') }}" alt="muhasabah" />
							<p 
								class="text-right"
								style="color: white; margin:0;" 
								>
								Saat menjawab : Senin, 24 Juli 2017, 08:00 A.M
							</p>
						</div>

					  </div>
					</div>
					
	            </div>

	            <div class="12u">
		            <div style="background-color: #f07543;" class="panel panel-default">
					  <div class="panel-body">
					  	<div class="col-md-4">
					  		<h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Surat ke :  78	
						    </h1> 
						    <h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Nama Surat : An - Naba'
						    </h1> 
						     <h1 
						    	class="text-left" 
						    	style="color: white; margin: 0;">
						    		Ayat ke : 6
						    </h1>

						</div>
						<div class="col-md-8">
							<img width="100%" height="100%" src="{{ URL::asset('images/ayat2.png') }}" alt="muhasabah" />

							<p 
								class="text-right"
								style="color: white; margin:0;" 
								>
								Saat menjawab : Senin, 24 Juli 2017, 10:00 A.M
							</p>
						</div>

					  </div>
					</div>
					
	            </div>

	            <div class="12u">
			            <a href="#" onclick="comingsoon();" "><div style="background-color: #f07543;" class="panel panel-default">
						  <div class="panel-body">
						    <h1 
						    	class="text-center" 
						    	style="font-size: 150%; color: white; margin: 0;">
						    		<i class="fa fa-spinner" aria-hidden="true"></i> Lihat Kesalahan Lainnya...
						    </h1> 						   
						  </div>
						</div>
						</a>

		        </div>

	        <!-- last div  -->
	        </div>	         

	    </div>
	</div>
	

	
	
	
	
	<div class="row uniform">
		<div class="12u">
			<ul class="actions">
				<li><a href="{{ route('/') }}" class="button alt icon fa-chevron-left">Kembali ke menu</a></li>
			</ul>
		</div>
	</div>
	
	
	
</section>

<div class="alert alert-warning text-center">
  <strong>Warning!</strong> Halaman ini masih dalam tahap pengembangan.
</div>

<script type="text/javascript">
  function comingsoon() { alert("The Feature is Coming Soon!"); }
</script>

@endsection