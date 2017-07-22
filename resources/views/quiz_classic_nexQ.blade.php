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
					
			
				
					<div class="row">
						<div class="12u">
							<section class="box special features">
								<div class="features-row">
									<section>
										
										<a href="#">
										<span class="icon major fa-check-square accent2"></span>
										@if($randomPosisi == 1)
										<h3>{{$substringAyat}}</h3>
										@else
											<h3>{{$opsi1}}</h3>
										@endif
										</a>
									</section>
									<section>
										<a href="#">
										<span class="icon major fa-check-square accent3"></span>
										@if($randomPosisi == 2)
										<h3>{{$substringAyat}}</h3>
										@else
											<h3>{{$opsi2}}</h3>
										@endif
										</a>
									</section>
								</div>
								<div class="features-row">
									<section>
										<a href="#">
											<span class="icon major fa-check-square accent4"></span>
											@if($randomPosisi == 3)
											<h3>{{$substringAyat}}</h3>
											@else
												<h3>{{$opsi3}}</h3>
											@endif
										</a>
									</section>
									<section>
										<a href="#">
											<span class="icon major fa-check-square accent5"></span>
											@if($randomPosisi == 4)
											<h3>{{$substringAyat}}</h3>
											@else
												<h3>{{$opsi4}}</h3>
											@endif
										</a>
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
										
										<li><a href="#" class="button special fit">Pass</a></li>
										<li><a href="#" class="button special fit">Selesai</a></li>
									</ul>
									
								</section>

						</div>
					</div>
					
				
				<p>skor :{{ $_SESSION["counterBenar"] }}</p>
					


@endsection