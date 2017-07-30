@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

<header>
<h1 style="font-size: 300%;" class="text-center">
    	<?php 
	    if(isset($_SESSION["user"])){  
	        echo   "Assalamu'alaikum " . $_SESSION["user"]. "!";
	    }
	                        //jika belum login
	    else {
	     header( "refresh:0;login" );
	     return "";
		 }
		 ?>
     </h1>

     <h5>Level Anda : <b>Beginner</b></h5>

  <div class="progress">
    <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
      60% Experiences
    </div>
  </div>
  
</header>

<section class="box">
    <h3>Ranking Terbaik Juri + Admin</h3>
    
	<div class="table-wrapper">
		<table class="alt">
			<thead>
				<tr>
					<th><strong>Nama</strong></th>
					<th><strong>Skor</strong></th>
					
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