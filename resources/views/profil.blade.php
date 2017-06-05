@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

<header>
  <h2>Ubah Profil</h2>
</header>
<div class="box">
  <p>Setelah Mengisi Profil anda akan dikeluarkan secara otomatis. silahkan login kembali<p>
        
  <form method="post" action="#">
   <input type="hidden" name="_token" value="{{ csrf_token() }}">
   <div class="row uniform 50%">
    <div class="12u">
      <input type="text" name="alamat" value="" placeholder="Alamat" />
    </div>
  </div>

  <div class="row uniform 50%">
    <div class="12u">
      <?php echo $errors->first('alamat') ?>
    </div>
  </div>

  <div class="row uniform 50%">
    <div class="12u">
      <input type="text" name="tanggal" value="" placeholder="Waktu Bimbingan" />
    </div>
  </div>


  <div class="row uniform">
    <div class="12u">
      <ul class="actions align-center">
        <li><input type="submit" value="Simpan" /></li>
      </ul>
    </div>
  </div>

</form>


</div>



@endsection