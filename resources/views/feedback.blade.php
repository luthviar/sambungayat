@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')


<section class="box">
    <h3>Bagimana menurut anda?</h3>
    @if(Session::has('flash_message'))
	    <div class="alert alert-success">
	        {{ Session::get('flash_message') }}
	    </div>
	@endif
	<br/>
	<form action="{{ route('feedback') }}" method="post">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				
		<div class="row uniform 50%">
			<div class="12u">
				<textarea name="message" id="message" placeholder="Pesan" required rows="6"></textarea>
			</div>
		</div>
		
		
		
		<div class="row uniform">
			<div class="12u">
				<ul class="actions">
					<li><input type="submit" value="Simpan" /></li>
					<li><a href="{{ route('/') }}" class="button alt icon fa-chevron-left">Kembali ke menu</a></li>
				</ul>
			</div>
		</div>
	</form>


</section>


@endsection