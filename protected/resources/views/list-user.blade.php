<h1>Jumlah user : {{ $countusers }} <h2>
<div class="table-wrapper">
	<table class="alt">
		<thead>
			<tr>
				<th><strong>Nama</strong></th>
				<th><strong>Skor</strong></th>
				
			</tr>
		</thead>
		<tbody>
			@foreach ($users as $user)
			<tr>
				<td>{{ $user->id_user }}</td>
				<td>{{ $user->nama_lengkap }}</td>
				<td>{{ $user->username }}</td>
				<td>{{ $user->email }}</td>
				<td>{{ $user->created_at }}</td>
			</tr>
			@endforeach
			
		</tbody>
		
	</table>
</div>