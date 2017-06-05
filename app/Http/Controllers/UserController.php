<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


use Illuminate\Support\Facades\Input;
use Validator;
use Redirect;

use App\UserModel;

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
				"tanggal" => "required", //Harus email
				
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

	public function quiz(){
			session_start();
			return view('quiz');
	}
	
	
	
	
	
}
