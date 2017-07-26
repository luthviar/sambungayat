@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')



<script>
// Set the date we're counting down to

var countDownDate = new Date();
countDownDate.setSeconds(countDownDate.getSeconds() + 11);
countDownDate = countDownDate.getTime();
// Update the count down every 1 second
var x = setInterval(function() {


    // Get todays date and time
    var now = new Date().getTime();
    
    // Find the distance between now an the count down date
    var distance = countDownDate - now;
 
    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
    // Output the result in an element with id='demo'
    document.getElementById('demo').innerHTML = 'Sisa waktu : ' + seconds + ' detik';
    
    // If the count down is over, write some text 
    if (distance < 0) {
       $("#myform").submit();
	    document.getElementById("demo").innerHTML = "Waktu habis";
    }
	
	
	
	
}, 1000);
</script>



	


<form id="myform" method="post" action="" >
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
											

					<div class="row">
						<div class="12u">
								<section class="box">
									<ul class="actions fit">
										<li><button type="submit" class="button special fit"><h3 style="color:white;">Benar : {{ $_SESSION["counterBenar"] }} </h3></button></li>
										<li><button type="submit" class="button special fit"><h3 id="demo" style="color:white;"></h3></button></li>
									</ul>
									
									<h4>{{ $_SESSION["jumlahPertanyaan"] }} dari 5 pertanyaan</h4>
																		
									<h2 align="right">  {{$sisaAyatAwal}} 
										<span>  .....  <span> 
													{{$sisaAyatAkhir}} 
									</h2>

									<!-- PIlihan jawaban -->
									<style type="text/css">
										#jawaban1 li, #jawaban2 li  {
										    font-size: 200%;
										}
									</style>
									<ul class="actions fit" id="jawaban1">
										@if($randomPosisi == 1)
										<li><button type="submit" name="benar" class="button special fit">{{$substringAyat}}</button></li>
										@else
										<li><button type="submit" name="salah" class="button special fit">{{$opsi1}}</button></li>
										@endif

										@if($randomPosisi == 2)
										<li><button type="submit" name="benar" class="button special fit">{{$substringAyat}}</button></li>
										@else
										<li><button type="submit" name="salah" class="button special fit">{{$opsi2}}</button></li>
										@endif
									</ul>
									<ul class="actions fit" id="jawaban2">
										@if($randomPosisi == 3)
										<li><button type="submit" name="benar" class="button special fit">{{$substringAyat}}</button></li>
										@else
										<li><button type="submit" name="salah" class="button special fit">{{$opsi3}}</button></li>
										@endif

										@if($randomPosisi == 4)
										<li><button type="submit" name="benar" class="button special fit">{{$substringAyat}}</button></li>
										@else
										<li><button type="submit" name="salah" class="button special fit">{{$opsi4}}</button></li>
										@endif

									</ul>

									
								</section>
						</div>
					</div>
					
				
					<div class="row">
						<div class="12u">

							<!-- Buttons -->
								<section class="box">
									
									<ul class="actions fit">
										
										<li><button type="submit" name="pass" class="button special fit">Lewati</button></li>
										<li><button type="submit" name="selesai" class="button special fit">Selesai</button></li>
									</ul>
									
								</section>

						</div>
					</div>
					
	</form>	
				
				


@endsection