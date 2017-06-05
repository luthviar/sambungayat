@extends('layouts.layout')

@section('title','SambungAyat')

@section('content')

<header>
  <h2>
    <?php 
    if(isset($_SESSION["user"])){  
        echo   "Halo " . $_SESSION["user"]. "!";
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

            <!-- Buttons -->
            <section class="box">
                <h3>Buttons</h3>
                <ul class="actions">
                    <li><a href="#" class="button special">Special</a></li>
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button alt">Alternate</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button special big">Big</a></li>
                    <li><a href="#" class="button">Default</a></li>
                    <li><a href="#" class="button alt small">Small</a></li>
                </ul>
                <ul class="actions fit">
                    <li><a href="#" class="button special fit">Fit</a></li>
                    <li><a href="#" class="button fit">Fit</a></li>
                    <li><a href="#" class="button alt fit">Fit</a></li>
                </ul>
                <ul class="actions fit small">
                    <li><a href="#" class="button special fit small">Fit + Small</a></li>
                    <li><a href="#" class="button fit small">Fit + Small</a></li>
                    <li><a href="#" class="button alt fit small">Fit + Small</a></li>
                </ul>
                <ul class="actions">
                    <li><a href="#" class="button special icon fa-search">Icon</a></li>
                    <li><a href="#" class="button icon fa-download">Icon</a></li>
                    <li><a href="#" class="button alt icon fa-check">Icon</a></li>
                </ul>
                <ul class="actions">
                    <li><span class="button special disabled">Special</span></li>
                    <li><span class="button disabled">Default</span></li>
                    <li><span class="button alt disabled">Alternate</span></li>
                </ul>
            </section>

        </div>
    </div>







@endsection