<h1>Jumlah feedback : {{ $countfeeds }} <h2>
<div class="table-wrapper">
	<table class="alt">
		<thead>
			<tr>
				<th><strong>Nama</strong></th>
				<th><strong>Skor</strong></th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($feeds as $feed)
			<tr>
				<td>{{ $feed->id_user }}</td>
				<td>{{ $feed->feedback }}</td>
				<td>{{ $feed->created_at }}</td>
			</tr>
			@endforeach
			
		</tbody>
		
	</table>
</div>