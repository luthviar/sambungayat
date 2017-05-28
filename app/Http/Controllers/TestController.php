<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

use Illuminate\Support\Facades\DB;
use Validator;
use Redirect;


class TestController extends Controller
{
	
	public function index(){
	
		return view('classic/list_surah');

	}
	
	public function index_submit(){
	session_start();
		$_SESSION["surah"] = Input::get('listSurah');
		
	
		 return redirect()->route('/test');

	}
	
	public function pertanyaan($valueBenar){
		
		session_start();
		$_SESSION["counterBenar"]= $_SESSION["counterBenar"] + $valueBenar  ;	
	
		 $randomAyat =  rand(1, 4);
		 $t = new \AlQuranCloud\ApiClient\Client();
		 //substringAyat  (fullayat, y , z (dimana z > y), 'utf-8')
		//sisaAyatAwal   (fullayat, x , y (dimana y > x), 'utf-8')
		//sisaAyatAkhir   (fullayat,  y+z, panjang ayat, 'utf-8')
		//X selalu 0
		 $fullAyat = $t->ayah($_SESSION["surah"].':'.$randomAyat)->data->text;
		 
		 $randomY =  rand(0, mb_strlen($fullAyat)/4);
		 $randomZ =  rand($randomY , mb_strlen($fullAyat)/4);
		 
	
		$sisaAyatAwal = mb_substr($fullAyat,0,$randomY,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,$randomY, $randomZ ,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat, $randomZ + $randomY,mb_strlen($fullAyat) ,'utf-8');
		
	
		
		
		
		//randomAyat di AlQuran
		$randomPertama =  rand(0, 1000);
		$randomKedua =  rand(1000, 2000);
		$randomKetiga =   rand(2000, 3000);
		$randomKeempat =   rand(4000, 5000);
		
		$opsi1 = mb_substr ($t->ayah($randomPertama)->data->text, 6, 10, 'utf-8' );
		$opsi2 = mb_substr ($t->ayah($randomKedua)->data->text, 6, 10, 'utf-8' );
		$opsi3 = mb_substr ($t->ayah($randomKetiga)->data->text, 6, 10, 'utf-8' );
		$opsi4 = mb_substr ($t->ayah($randomKeempat)->data->text, 6, 10, 'utf-8' );
	
		
		
		
		
		$randomPosisi = rand(1,4);
		

		
		
		
	
		
		
		
		//return $opsi1;

		return view('classic/pertanyaan' , array( 'opsi1' => $opsi1,'opsi2' => $opsi2,'opsi3'=> $opsi3, 'fullAyat' => $fullAyat,'sisaAyatAwal'=>$sisaAyatAwal ,'sisaAyatAkhir' => $sisaAyatAkhir, 'substringAyat'=> $substringAyat,
		'randomPosisi'=> $randomPosisi, 'opsi4'=> $opsi4
		
		
		));
		
		
		
		
		
		
		
		
	}
	
	
	public function awal_pertanyaan() {
			session_start();
	
		
	   $t = new \AlQuranCloud\ApiClient\Client();
	    $randomAyat =  rand(1, 4);
		$surah = $_SESSION["surah"];
		   
		$fullAyat = $t->ayah($surah.':'.$randomAyat)->data->text;
			
			
		$_SESSION["counterBenar"] = 0;	
				
		
		
		$sisaAyatAwal = mb_substr($fullAyat,0,6,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,6,10,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat,16,mb_strlen($fullAyat) ,'utf-8');
		
		
		
		
		//substringAyat  (fullayat, x , y, 'utf-8')
		//sisaAyatAwal   (fullayat, 0 , x, 'utf-8')
		//sisaAyatAkhir   (fullayat, 0 , x+y, 'utf-8')
		
	//randomAyat di AlQuran
		$randomPertama =  rand(0, 1000);
		$randomKedua =  rand(1000, 2000);
		$randomKetiga =   rand(2000, 3000);
		$randomKeempat =   rand(4000, 5000);
		
		$opsi1 = mb_substr ($t->ayah($randomPertama)->data->text, 6, 10, 'utf-8' );
		$opsi2 = mb_substr ($t->ayah($randomKedua)->data->text, 6, 10, 'utf-8' );
		$opsi3 = mb_substr ($t->ayah($randomKetiga)->data->text, 6, 10, 'utf-8' );
		$opsi4 = mb_substr ($t->ayah($randomKeempat)->data->text, 6, 10, 'utf-8' );
	
		
		
		
		
		$randomPosisi = rand(1,4);
		

		
		
		
		
		
		
		
		//return $opsi1;

		return view('classic/pertanyaan' , array( 'opsi1' => $opsi1,'opsi2' => $opsi2,'opsi3'=> $opsi3, 'fullAyat' => $fullAyat,'sisaAyatAwal'=>$sisaAyatAwal ,'sisaAyatAkhir' => $sisaAyatAkhir, 'substringAyat'=> $substringAyat,
		'randomPosisi'=> $randomPosisi, 'opsi4'=> $opsi4
		
		
		));
		
	
		//return substr($x, 5);
	}
}
