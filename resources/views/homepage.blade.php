@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

<header>
  <h2>
    <?php 
    if(isset($_SESSION["user"])){  
        echo   "Assalamu'alaikum " . $_SESSION["user"]. "!";
    }
                        //jika belum login
    else {
     header( "refresh:0;/login" );
     return "";
 }
 ?>
</h2>
</header>





<div class="row">
    <div class="12u">


@php
//cek pengisian profil
if(isset($_SESSION["is_profil_terisi"])){
if($_SESSION["is_profil_terisi"]){
$is_terisi = false;
}
else{
$is_terisi = true;
}
}
@endphp

@if($is_terisi == true)
<p>
Anda belum mengisi profil anda. Silahkan ganti profil anda

<a a href= "{{ route('/ganti_profil') }}">
disini
</a>
</p>
@endif

<section class="box">
    <h3>Menu</h3>

    <div class="box alt">

        <div class="row no-collapse 50% uniform">
            <div class="6u"><a href="{{ route('/quiz')}}"><span class="image fit"><img src="images/menu1.png" alt="" /></span></a></div>
            <div class="6u"><a href="{{ route('/quiz2')}}"><span class="image fit"><img src="images/menu2.png" alt="" /></span></a></div>
        </div>

         <div class="row no-collapse 50% uniform">
            <div class="6u"><a href="{{ route('/')}}"><span class="image fit"><img src="images/menu3.png" alt="" /></span></a></div>
            <div class="6u"><a href="{{ route('/')}}"><span class="image fit"><img src="images/menu4.png" alt="" /></span></a></div>
        </div>


        <div class="row no-collapse 50% uniform">
            <div class="4u"><a href="{{ route('/')}}"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></a></div>
            <div class="4u"><a href="{{ route('/')}}"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></a></div>
            <div class="4u"><a href="{{ route('/')}}"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></a></div>
        </div>

        <div class="row no-collapse 50% uniform">
            <div class="3u"><span class="image fit"></span></div>
            <div class="6u"><span class="image fit"><img src="images/pic04.jpg" alt="" /></span></div>
        </div>


    </div>


</section>

</div>
</div>





@endsection