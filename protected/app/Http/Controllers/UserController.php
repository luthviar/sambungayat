<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

use App\UserModel;
use App\Feedback;
use Config;
use Crypt;

class UserController extends Controller
{
	
	public function index() {
		session_start();
    	return view('homepage');
    }
	public function login(){
		session_start();
		return view('login');
	}
	public function login_submit(){
	session_start();
		$flagSuccess = false;

	    $validator = Validator::make(
	        Input::all(),
	        array(//Unique nya belum
	            "username" => "required",
	            "password" => "required|min:8", //Asumsi ajah
	            )
	    );

	    $UserArr = UserModel::where('username', Input::get('username'))->get();

	    $isUsernameExist = count($UserArr)>0;
	    
	    if(!$validator->passes()) {
	    }

	    //Username tidak terdaftar
	    else if(!$isUsernameExist) {
	        $validator->getMessageBag()->add('wrong_username', 'username/password salah');
	    }

		else if((Crypt::decrypt($UserArr->first()->password) == Input::get('password'))!=1) {
	        $validator->getMessageBag()->add('wrong_password', 'username/password salah ');
	    }
		
		
	    else {
	        $flagSuccess = true;
	    }

	    //Jika login sukses
	    if ($flagSuccess) {
	        $user = UserModel::where('username', Input::get('username'))->get()->first();
	    
			if($user->alamat == NULL){
			   	$_SESSION["is_profil_terisi"]= 0;
			}
			else{
				  	$_SESSION["is_profil_terisi"]= 1;
			}
			
			
			$_SESSION["user"]= $user->username;

			$_SESSION["user_id"]= $user->id_user;
		
	        return redirect()->route('/');
	    }

	    else {
	        //Data error or username taken:
	        return Redirect::to('login')
	            ->withErrors($validator)
	            ->withInput();
	    }
	}
	public function registrasi() {
		session_start();
    	return view('registrasi');
    }

    public function registrasi_submit() {
		session_start();
    	$validator = Validator::make(
        Input::all(),
        array(
            "username" => "required",
            "email" => "required|email", //Harus email
            "password" => "required|min:8", // Asumsi ajah minimal 8 karakter
            "password_confirmation" => "required|same:password", //Harus sama dengan password
	        )
	    );

	    $isUsernameTaken = count(UserModel::where('username', Input::get('username'))->get())>0;
	    
	    //Username(unique) Validation. Apakah sudah ada atau belum
	    if($isUsernameTaken) {
	        $validator->getMessageBag()->add('duplicate_username', 'username telah terpakai.');
	    }

	    //jika semua validasi terpenuhi simpan ke database
	    else if($validator->passes()) {
	        $user = new UserModel;
	        $user->username    = Input::get('username');
			$user->nama_lengkap    = Input::get('nama_lengkap');
			$user->email    = Input::get('email');
	        $user->password = Crypt::encrypt(Input::get('password'));
			$user->save();

			
	        session()->flash('flash_message', 'Selamat! Silahkan login dengan akun anda.');
	        return redirect()->route('/login');
	    }

	    //Data error or username taken:
	        return Redirect::to('registrasi')
	            ->withErrors($validator)
	            ->withInput();
    }
	
	public function logout() {
		session_start();
        session_unset();
        session_destroy();
		return redirect()->route('/login');
		
	}
	
	public function ganti_profil(){
			session_start();
			return view('profil');
	}
	
	
	public function ganti_profil_submit(){
			session_start();
			$validator = Validator::make(
			Input::all(),
			array(
				"alamat" => "required",
				"tanggal_lahir" => "required", //Harus email
				
				)
			);

			

			//jika semua validasi terpenuhi simpan ke database
			 if($validator->passes()) {
				 
					
					DB::table('user')
					->where('username', $_SESSION["user"])
					->update(
					
					[
					
					'alamat' =>  Input::get('alamat'),
					
					
					'tanggal_lahir' =>  Input::get('tanggal_lahir'),
					
					]
					
					)
					
					;
   

					$_SESSION["is_profil_terisi"]= 1;
				
				
				return redirect()->route('/logout');
			}

			//Data error or username taken:
				return Redirect::to('profil')
					->withErrors($validator)
					->withInput();
	}


	public function contact_us(){
			session_start();
			return view('contact');
	}

	public function home(){
			session_start();
			return view('index');
	}

	public function showFeedbackForm(){
			session_start();
			return view('feedback');
	}

	public function showAll() {
		$allusers = DB::table('user')->get();
		$countusers = DB::table('user')->count();

		
		return view('list-user' ,
			array(
				'users' => $allusers,
				'countusers' => $countusers
			));
	}

	public function storeFeedback(Request $request){
		session_start();

		$feedback = new Feedback;
        $feedback->id_user = $_SESSION["user_id"];
        $feedback->feedback = $request->message;
        
        $feedback->save();
        session()->flash('flash_message', 'Terima kasih. Pesan anda telah disimpan.');
		return view('feedback');
	}

	
	public function quiz2(){
			session_start();
			return view('quiz2');
	}
	
	
	//Classic
	
	//ambil surah
	public function list_surah(){
		session_start();
		
				if(isset($_SESSION["jumlahPertanyaan"])	){
						unset($_SESSION["jumlahPertanyaan"]);
			
			
					}
					
				if(isset($_SESSION["counterBenar"])	){
							unset($_SESSION["counterBenar"]);
			
			
				}
	
		
		
		
		return view('classic/list_surah');

	}
	
	public function list_surah_submit(){
	session_start();
		
		$_SESSION["surah"] = Input::get('listSurah');
		
		 $t = Config::get('constants.AL_QURAN');
		
		//return $t->ayah('10:10')->data->text;
		
		 return redirect()->route('/quiz_classic_first');
	
	}
	//pertanyaan pertama
	public function quiz_classic_first(){
		
		session_start();
			
	
	   $t = Config::get('constants.AL_QURAN');
	    
		$surah = $_SESSION["surah"];
		
		$surah_text = $t->surah($surah);
		
		$randomAyat =  rand(1,  $surah_text->data->numberOfAyahs);
		
		if($randomAyat == 1){
			$randomAyat = 2;
		}
		
		if(isset($_POST["selesai"])){
		$jumlahBenar= $_SESSION["counterBenar"] ;
				unset($_SESSION["jumlahPertanyaan"]);
						unset($_SESSION["counterBenar"]);
						
						

						
						
						
						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
								
						}
						

						
						
						
						
						
					return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
		}
		
		$fullAyat = $t->ayah($surah.':'.$randomAyat)->data->text;
		if(!isset($_SESSION["counterBenar"])	){
			$_SESSION["counterBenar"] = 0;	
		
		}
		
		if(!isset($_SESSION["jumlahPertanyaan"])	){
			$_SESSION["jumlahPertanyaan"] = 1;	
		
		}
		else{
				if ($_SESSION["jumlahPertanyaan"] > 5) {
					$jumlahBenar= $_SESSION["counterBenar"] ;
					unset($_SESSION["jumlahPertanyaan"]);
						unset($_SESSION["counterBenar"]);
					
					
					//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
						}
					
					
					
					
					
					
					
					return view('selesai',array( 'jumlahBenar' => $jumlahBenar));
				} 
		}
				
		$sisaAyatAwal = mb_substr($fullAyat,0,6,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,6,10,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat,16,mb_strlen($fullAyat) ,'utf-8');

		//substringAyat  (fullayat, x , y, 'utf-8')
		//sisaAyatAwal   (fullayat, y , x, 'utf-8')
		//sisaAyatAkhir   (fullayat, x+y , fullAyat, 'utf-8')
		
	//randomAyat di AlQuran
		$randomPertama =  rand(0, 10);

		
		$opsi1 = mb_substr ($fullAyat, 1, 10, 'utf-8' );
		$opsi2 = mb_substr ($fullAyat, 6, 16, 'utf-8' );
		$opsi3 = mb_substr ($fullAyat, 1, 6, 'utf-8' );
		$opsi4 = mb_substr ($fullAyat, 6, 13, 'utf-8' );


		$randomPosisi = rand(1,4);

		//return $opsi1;

		return view('quiz' , array( 'opsi1' => $opsi1,'opsi2' => $opsi2,'opsi3'=> $opsi3, 'fullAyat' => $fullAyat,'sisaAyatAwal'=>$sisaAyatAwal ,'sisaAyatAkhir' => $sisaAyatAkhir, 'substringAyat'=> $substringAyat,
		'randomPosisi'=> $randomPosisi, 'opsi4'=> $opsi4
		
		
		));
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
			
	}
	
	public function quiz_classic_first_submit(){
		
		session_start();
		if (isset($_POST['benar'])) {
			$_SESSION["counterBenar"]= $_SESSION["counterBenar"] + 1  ;	
		} 
		
		if(isset($_POST["selesai"])){
			$jumlahBenar= $_SESSION["counterBenar"] ;
				unset($_SESSION["jumlahPertanyaan"]);
						unset($_SESSION["counterBenar"]);
				
				
				
						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
						}
				
				
				
					return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
		}
		
		$_SESSION["jumlahPertanyaan"] = $_SESSION["jumlahPertanyaan"]+1;	
		
		if ($_SESSION["jumlahPertanyaan"] > 5) {
			$jumlahBenar= $_SESSION["counterBenar"] ;
					unset($_SESSION["jumlahPertanyaan"]);
						unset($_SESSION["counterBenar"]);
						

						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
								
						}
						
						
						
						
						
					return view('selesai',array( 'jumlahBenar' => $jumlahBenar));
		} 
		
		
		$t = Config::get('constants.AL_QURAN');
		   
		$surah = $_SESSION["surah"];
		
		
		$surah_text = $t->surah($surah);
		
		$randomAyat =  rand(1,  $surah_text->data->numberOfAyahs);
		 
		 
		 
		 if($randomAyat == 1){
			$randomAyat = 2;
		}
		 
		 
		
		 //substringAyat  (fullayat, y , z (dimana z > y), 'utf-8')
		//sisaAyatAwal   (fullayat, x , y (dimana y > x), 'utf-8')
		//sisaAyatAkhir   (fullayat,  y+z, panjang ayat, 'utf-8')
		//X selalu 0
		 $fullAyat = $t->ayah($_SESSION["surah"].':'.$randomAyat)->data->text;
		 
		 $randomY =  rand(2, mb_strlen($fullAyat)/4);
		 $randomZ =  rand($randomY , mb_strlen($fullAyat)/4);
		 
	
		$sisaAyatAwal = mb_substr($fullAyat,0,$randomY,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,$randomY, $randomZ ,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat, $randomZ + $randomY,mb_strlen($fullAyat) ,'utf-8');
		
			//randomAyat di AlQuran
		$randomPertama =  rand(0, 1000);

		
		
		
		$opsi1 = mb_substr ($fullAyat, 1, 10, 'utf-8' );
		$opsi2 = mb_substr ($fullAyat, 6, 16, 'utf-8' );
		$opsi3 = mb_substr ($fullAyat, 1, 6, 'utf-8' );
		$opsi4 = mb_substr ($fullAyat, 6, 13, 'utf-8' );

		$randomPosisi = rand(1,4);
		//return $opsi1;

		return view('quiz' ,
            array(
                'opsi1' => $opsi1,
                'opsi2' => $opsi2,
                'opsi3'=> $opsi3,
                'fullAyat' => $fullAyat,
                'sisaAyatAwal'=>$sisaAyatAwal ,
                'sisaAyatAkhir' => $sisaAyatAkhir,
                'substringAyat'=> $substringAyat,
                'randomPosisi'=> $randomPosisi,
                'opsi4'=> $opsi4
				
		));
		
		
	}
	
	
	//time attack
	
	public function list_surah_time(){
		session_start();

					if(isset($_SESSION["jumlahPertanyaan"])	){
						unset($_SESSION["jumlahPertanyaan"]);
			
			
					}
					
					if(isset($_SESSION["counterBenar"])	){
							unset($_SESSION["counterBenar"]);
			
			
					}
	

		
		return view('classic/list_surah');

	}
	
	public function list_surah_time_submit(){
	session_start();
		
		$_SESSION["surah"] = Input::get('listSurah');
		
		 $t = Config::get('constants.AL_QURAN');
		
		//return $t->ayah('10:10')->data->text;
		
		 return redirect()->route('/quiz_time_first');
	
	}
	//pertanyaan pertama
	public function quiz_time_first(){
		
		session_start();
			
	
	   $t = Config::get('constants.AL_QURAN');
	    
		$surah = $_SESSION["surah"];
		
		
		$surah_text = $t->surah($surah);
		
		$randomAyat =  rand(1,  $surah_text->data->numberOfAyahs);
		
		//jika bismillah
		if($randomAyat == 1 ){
			$randomAyat = 2;
		}

		$fullAyat = $t->ayah($surah.':'.$randomAyat)->data->text;
		if(!isset($_SESSION["counterBenar"])	){
			$_SESSION["counterBenar"] = 0;	
		
		}
		
		if(!isset($_SESSION["jumlahPertanyaan"])	){
			$_SESSION["jumlahPertanyaan"] = 1;	
		
		}
		if(isset($_POST["selesai"])){
		$jumlahBenar= $_SESSION["counterBenar"] ;
					
						
						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
						}
						
		
		
						return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
		}
		
		else{
				if ($_SESSION["jumlahPertanyaan"] > 5) {
					$jumlahBenar= $_SESSION["counterBenar"] ;
						
						
						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
							}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
								
						}
								
						
						
						
						return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
				} 
		}
				
		$randomY =  rand(2, mb_strlen($fullAyat)/4);
		 $randomZ =  rand($randomY , mb_strlen($fullAyat)/4);
		 
	
		$sisaAyatAwal = mb_substr($fullAyat,0,$randomY,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,$randomY, $randomZ ,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat, $randomZ + $randomY,mb_strlen($fullAyat) ,'utf-8');
		
		//substringAyat  (fullayat, x , y, 'utf-8')
		//sisaAyatAwal   (fullayat, 0 , x, 'utf-8')
		//sisaAyatAkhir   (fullayat, 0 , x+y, 'utf-8')
		
	//randomAyat di AlQuran untuk opsi lain
		$randomPertama =  rand(0, 10);

		
		$opsi1 = mb_substr ($fullAyat, 1, 10, 'utf-8' );
		$opsi2 = mb_substr ($fullAyat, 6, 16, 'utf-8' );
		$opsi3 = mb_substr ($fullAyat, 1, 6, 'utf-8' );
		$opsi4 = mb_substr ($fullAyat, 6, 13, 'utf-8' );


		$randomPosisi = rand(1,4);

		//return $opsi1;

		return view('quiz_time' , array( 'opsi1' => $opsi1,'opsi2' => $opsi2,'opsi3'=> $opsi3, 'fullAyat' => $fullAyat,'sisaAyatAwal'=>$sisaAyatAwal ,'sisaAyatAkhir' => $sisaAyatAkhir, 'substringAyat'=> $substringAyat,
		'randomPosisi'=> $randomPosisi, 'opsi4'=> $opsi4
		
		
		));
			
			
			
			
			

	}
	
	public function quiz_time_first_submit(){
		
		session_start();
		
		
		
		
		if (isset($_POST['benar'])) {
			$_SESSION["counterBenar"]= $_SESSION["counterBenar"] + 1  ;	
		} 

		$_SESSION["jumlahPertanyaan"] = $_SESSION["jumlahPertanyaan"]+1;	
		
		if ($_SESSION["jumlahPertanyaan"] > 5) {
			$jumlahBenar= $_SESSION["counterBenar"] ;
					
					
					//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
						}
					
					
					
					
					return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
		} 
		
		if(isset($_POST["selesai"])){
						$jumlahBenar= $_SESSION["counterBenar"] ;
					
					
					
					
						//cek apakah udah ada table score
						$user = DB::table('score')->where('id_user', $_SESSION["user_id"])->first();
							//kalau belum bikin row baru
						if($user == NULL){
						
								DB::table('score')->insert(
									['id_user' => $_SESSION["user_id"], 'total_score' => $jumlahBenar]
								);
						}
							//kalau udah diupdate aja
						else{
							$score_awal = $user->total_score;
							
							$score_akhir = ($score_awal +  $jumlahBenar);
								
								
											DB::table('score')
												  ->where('id_user', $user->id_user)
													  ->update(['total_score' => $score_akhir]);
										
								
						}
						

					
					
					
					
					
					
					
					
					
					return view('selesai_time',array( 'jumlahBenar' => $jumlahBenar));
		}
		
		
		 $t = Config::get('constants.AL_QURAN');

	   
		$surah = $_SESSION["surah"];
		
		$surah_text = $t->surah($surah);
		
		$randomAyat =  rand(1,  $surah_text->data->numberOfAyahs);
		 //jika bismillah
		 if($randomAyat == 1 ){
			$randomAyat = 2;
		}
		 $t = Config::get('constants.AL_QURAN');
		 //substringAyat  (fullayat, y , z (dimana z > y), 'utf-8')
		//sisaAyatAwal   (fullayat, x , y (dimana y > x), 'utf-8')
		//sisaAyatAkhir   (fullayat,  y+z, panjang ayat, 'utf-8')
		//X selalu 0
		 $fullAyat = $t->ayah($_SESSION["surah"].':'.$randomAyat)->data->text;
		 
		 $randomY =  rand(2, mb_strlen($fullAyat)/4);
		 $randomZ =  rand($randomY , mb_strlen($fullAyat)/4);
		 
	
		$sisaAyatAwal = mb_substr($fullAyat,0,$randomY,'utf-8');
		
		$substringAyat =mb_substr($fullAyat,$randomY, $randomZ ,'utf-8');
		
		$sisaAyatAkhir = mb_substr($fullAyat, $randomZ + $randomY,mb_strlen($fullAyat) ,'utf-8');
		
			//randomAyat di AlQuran
		$randomPertama =  rand(0, 1000);

		
		
		
		$opsi1 = mb_substr ($fullAyat, 1, 10, 'utf-8' );
		$opsi2 = mb_substr ($fullAyat, 6, 16, 'utf-8' );
		$opsi3 = mb_substr ($fullAyat, 1, 6, 'utf-8' );
		$opsi4 = mb_substr ($fullAyat, 6, 13, 'utf-8' );

		$randomPosisi = rand(1,4);
		//return $opsi1;

		return view('quiz_time' ,
            array(
                'opsi1' => $opsi1,
                'opsi2' => $opsi2,
                'opsi3'=> $opsi3,
                'fullAyat' => $fullAyat,
                'sisaAyatAwal'=>$sisaAyatAwal ,
                'sisaAyatAkhir' => $sisaAyatAkhir,
                'substringAyat'=> $substringAyat,
                'randomPosisi'=> $randomPosisi,
                'opsi4'=> $opsi4
				
		));
		
		
	}
	
	
	public function highscore(){
					session_start();
					
					
					$query = DB::table('score')->orderBy('total_score', 'desc')
					 ->join('user', 'user.id_user', '=', 'score.id_user');					
					$ranking = $query->limit(10)
		
					->get();



					
					$userscores = $query->where('user.id_user', $_SESSION["user_id"])->first();

					$countscore = DB::table('user')->count();

					if($userscores == NULL){					
						
						return view('highscore' ,
						array(
							'ranking' => $ranking,							
						));
					} else {
						return view('highscore2' ,
						array(
							'ranking' => $ranking,
							'userscores' => $userscores,
							'countscore'=> $countscore
						));
					}

						
				
	
	}

	public function highscorejuri() {
		session_start();

		$ranking = DB::table('score')->orderBy('total_score', 'desc')
					 ->join('user', 'user.id_user', '=', 'score.id_user')
					 ->where('user.username','juri1')
					 ->orWhere('user.username','juri2')
					 ->orWhere('user.username','juri3')
					 ->orWhere('user.username','admin')
					 ->get()
					 ;
		return view('highscore3' ,
						array(
							'ranking' => $ranking,							
						));
	}

	public function killSession(){
				ini_set('session.gc_max_lifetime', 0);
				ini_set('session.gc_probability', 1);
				ini_set('session.gc_divisor', 1);
				
				return "berhasil";
	}
	
}
