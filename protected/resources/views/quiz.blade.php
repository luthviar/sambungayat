@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

<form  method="post" action="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
											

					<div class="row">
						<div class="12u">
								<section class="box">
									<button href="#" class="button special fit"><h3 style="color:white;">Benar : {{ $_SESSION["counterBenar"] }} </h3></button>
									<h4>{{ $_SESSION["jumlahPertanyaan"] }} dari 5 pertanyaan</h4>
									
									<h2 align="right">  {{$sisaAyatAwal}} 
										<span>  .....  <span> 
													{{$sisaAyatAkhir}} 
									</h2>

									<!-- PIlihan jawaban -->
									<style type="text/css">
																			
										#jawaban1 li button, #jawaban2 li button {
										    font-size: 180%;
											width: 100%;
											min-width: 50px;
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