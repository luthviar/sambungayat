@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')


<section class="box">
    <h3>Pilih surah:</h3>
	<form method="post" action="">
		<input type="hidden" name="_token" value="{{ csrf_token() }}" />
				
		<div class="row uniform 50%">
			<div class="12u">
				<div class="select-wrapper">
					<select name="listSurah" id="category" required>
						<option value="">- Daftar surah -</option>
						<option value="112">Surat Al-Ikhlas (Ikhlas)</option>
						<option value="113">Surat Al-Falaq (Waktu Subuh)</option>
						<option value="114">Surat An-Nas (Umat manusia)</option>
					</select>
				</div>
			</div>
		</div>
		
		
		
		<div class="row uniform">
			<div class="12u">
				<ul class="actions">
					<li><input type="submit" value="Mulai" /></li>
					<li><a href="{{ route('/') }}" value="Kembali" class="button alt icon fa-chevron-left">Kembali</a></li>
				</ul>
			</div>
		</div>
	</form>


</section>


@endsection