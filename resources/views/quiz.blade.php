@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

					<div class="row">
						<div class="12u">
								<section class="box">
								
									
									<p>Apakah sambungan  dari ayat ini?  </p>


									<h2>  {{$sisaAyatAwal}} 
										<span> ...<span> 
													{{$sisaAyatAkhir}} 
									</h2>

									
								</section>
						</div>
					</div>
					
	<form  method="post" action="">
          <input type="hidden" name="_token" value="{{ csrf_token() }}">
				
					<div class="row">
						<div class="12u">
							<section class="box special features">
								<div class="features-row">
									<section>
										
										@if($randomPosisi == 1)
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="benar">{{$substringAyat}}</button>
										
									
										
									
										@else
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="salah">{{$opsi1}}</button>
										
										
										@endif
										
									</section>
									<section>
											
										
										@if($randomPosisi == 2)
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="benar">{{$substringAyat}}</button>
										
									
										
									
										@else
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="salah">{{$opsi2}}</button>
										
										
										@endif
										
										
									</section>
								</div>
								<div class="features-row">
									<section>
											
										
										@if($randomPosisi == 3)
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="benar">{{$substringAyat}}</button>
										
									
										
									
										@else
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="salah">{{$opsi3}}</button>
										
										
										@endif
										
									</section>
									<section>
										
										@if($randomPosisi == 4)
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="benar">{{$substringAyat}}</button>
										
									
										
									
										@else
										<span class="icon major fa-check-square accent2"></span>
										<button type="submit" name="salah">{{$opsi4}}</button>
										
										
										@endif
										
										
									</section>
								</div>
							</section>
						</div>
					</div>
					
					
		  			
					
					
					<div class="row">
						<div class="12u">

							<!-- Buttons -->
								<section class="box">
									
									<ul class="actions fit">
										
										<li><button type="submit" name="pass" class="button special fit">Pass</button></li>
										<li><button type="submit" name="selesai" class="button special fit">Selesai</button></li>
									</ul>
									
								</section>

						</div>
					</div>
					
			</form>	
				<p>skor :{{ $_SESSION["counterBenar"] }}</p>
				<p>jumlah pertanyaan terjawab dan terlewat :{{ $_SESSION["jumlahPertanyaan"] }} dari 5 pertanyaan</p>


@endsection