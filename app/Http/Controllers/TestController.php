<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
	public function index() {
	   $t = new \AlQuranCloud\ApiClient\Client();
	   // dd($t->ayah(765)->data->text);
	   $x = $t->ayah(765)->data->text;
		//return $t->ayah(765)->data->text;
		return mb_substr($x,0,21,'utf-8');
		return substr($x, 5);
	}
}
