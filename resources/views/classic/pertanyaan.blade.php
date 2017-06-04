
<p>Apakah sambungan  dari ayat ini?  </p>


<p> Akhir {{$sisaAyatAwal}} 
	<span> ...<span> 
				{{$sisaAyatAkhir}} Awal
</p>


	
 




	

						 <table style="width:50%">
						  
						  <tr>
							@if($randomPosisi == 1)
							<td>
								<a href = "{{ route('test/', 1 ) }}">A.</a>
							 </td>
							<td>{{$substringAyat}}</td>
							@else
							<td>
								<a href = "{{ route('test/', 0 ) }}">A.</a>
							 </td>
							<td>{{$opsi1}}</td>
							@endif
						  </tr>
						  <tr>
								@if($randomPosisi == 2)
							<td>
								<a href = "{{ route('test/', 1 ) }}">B.</a>
							 </td>
							<td>{{$substringAyat}}</td>
							@else
							<td>
								<a href = "{{ route('test/', 0 ) }}">B.</a>
							 </td>
							<td>{{$opsi2}}</td>
							@endif
						  </tr>
						  <tr>
							@if($randomPosisi == 3)
							<td>
								<a href = "{{ route('test/', 1 ) }}">C.</a>
							 </td>
							<td>{{$substringAyat}}</td>
							@else
							<td>
								<a href = "{{ route('test/', 0 ) }}">C.</a>
							 </td>
							<td>{{$opsi3}}</td>
							@endif
						  
						  </tr>
						  
						  <tr>
							@if($randomPosisi == 4)
							<td>
								<a href = "{{ route('test/', 1 ) }}">D.</a>
							 </td>
							<td>{{$substringAyat}}</td>
							@else
							<td>
								<a href = "{{ route('test/', 0 ) }}">D.</a>
							 </td>
							<td>{{$opsi4}}</td>
							@endif
						  
						  </tr>


						  
						  
						 </table> 

						 <p>{{ $_SESSION["counterBenar"] }}</p>
