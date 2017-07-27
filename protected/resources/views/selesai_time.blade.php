@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')
<style type="text/css">
	#skor li {
	    font-size: 200%;
	}

	#opsi li {
	    font-size: 150%;
	}
</style>

<section class="box">
	<div class="row uniform 50%">
		<div class="12u">
			<ul class="actions fit" id="skor">
				<li><button class="button special fit">Selamat! Total benar: {{$jumlahBenar}}</button></li>
			</ul>
		</div>
	</div>
</section>

<section class="box">
	<div class="row uniform 50%">
		<div class="12u">
			<ul class="actions fit" id="opsi">
				<li><a href="{{ route('/quiz_time') }}" class="button special fit">Main lagi</a></li>
				<li><a href="{{ route('/') }}" class="button special fit">Kembali ke menu</a></li>
			</ul>
		</div>
	</div>
</section>


@endsection