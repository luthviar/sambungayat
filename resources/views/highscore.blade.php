@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')


<section class="box">
    <h3>Peringkat Pengguna</h3>
    
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th>Nama</th>
					<th>Skor</th>
					
				</tr>
			</thead>
			<tbody>
				@foreach ($ranking as $rankings)
				<tr>
					<td>{{ $rankings->nama_lengkap }}</td>
					<td>{{ $rankings->total_score }}</td>
				</tr>
				@endforeach
				
			</tbody>
			
		</table>
	</div>
	
	
	
	
	
	
	<div class="row uniform">
		<div class="12u">
			<ul class="actions">
				<li><a href="{{ route('/') }}" class="button alt icon fa-chevron-left">Kembali ke menu</a></li>
			</ul>
		</div>
	</div>
	
	
	
</section>


@endsection