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
							<option value="114">Surah An-Naas(Umat Manusia)</option>
							<option value="113">Surah Al-Falaq(Waktu Subuh)</option>
							<option value="112">Surah Al-Ikhlas(Ikhlas)</option>
							<option value="111">Surah Al-Lahab(Gejolak Api/ Sabut)</option>
							<option value="110">Surah An-Nasr (Pertolongan)</option>
							<option value="109">Surah Al-Kafirun(Orang-orang kafir)</option>
							<option value="108">Surah Al-Kauthar(Nikmat yang berlimpah)</option>
							<option value="107">Surah Al-Maa’uun(Barang-barang yang berguna)</option>
							<option value="106">Surah Quraisy(Suku Quraisy)</option>
							<option value="105">Surah Al-Fiil (Gajah)</option>
							<option value="104">Surah Al-Humazah(Pengumpat)</option>
							<option value="103">Surah Al-‘Asr(Masa/Waktu)</option>
							<option value="102">Surah At-Takathur(Bermegah-megahan)</option>
							<option value="101">Surah Al-Qari’ah(Hari Kiamat)</option>
							<option value="100">Surah Al-‘Aadiyaat(Berlari kencang)</option>
							<option value="99">Surah Al-Zalzalah(Kegoncangan)</option>
							<option value="98">Surah Al-Baiyinah(Pembuktian)</option>
							<option value="97">Surah Al-Qadr(Kemuliaan)</option>
							<option value="96">Surah Al-‘Alaq(Segumpal Darah)</option>
							<option value="95">Surah At-Tiin(Buah Tin)</option>
							<option value="94">Surah Al-Insyirah(Melapangkan)</option>
							<option value="93">Surah Adh-Dhuha(Waktu matahari sepenggalahan naik (Dhuha))</option>
							<option value="92">Surah Al-Lail(Malam)</option>
							<option value="91">Surah Asy-Syams(Matahari)</option>
							<option value="90">Surah Al-Balad(Negeri)</option>
							<option value="89">Surah Al-Fajr(Fajar)</option>
							<option value="88">Surah Al-Ghaasyiah(Hari Pembalasan)</option>
							<option value="87">Surah Al-A’laa(Yang paling tinggi)</option>
							<option value="86">Surah At-Taariq(Yang datang di malam hari)</option>
							<option value="85">Surah Al-Buruj(Gugusan bintang)</option>
							<option value="84">Surah Al-Insyiqaaq(Terbelah)</option>
							<option value="83">Surah Al-Mutaffifiin(Orang-orang yang curang)</option>
							<option value="82">Surah Al-Infitar(Terbelah)</option>
							<option value="81">Surah At-Takwiir(Menggulung)</option>
							<option value="80">Surah ‘Abasa(Ia Bermuka masam)</option>
							<option value="79">Surah An Naaziaat(Malaikat-Malaikat Yang Mencabut)</option>
							<option value="78">Surah An Naba'(Berita besar)</option>

						
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