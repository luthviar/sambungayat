<?php

namespace App\Http\Controllers;

use App\Quran;
use Illuminate\Http\Request;

class QuranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = new \AlQuranCloud\ApiClient\Client();
        for ($i=1; $i < 26; $i++) {
            $storeName = new Quran();
            $storeName->namesuraheng = $t->surah($i)->data->englishName;
            $storeName->save();
        }
        for ($i=25; $i < 51; $i++) {
            $storeName = new Quran();
            $storeName->namesuraheng = $t->surah($i)->data->englishName;
            $storeName->save();
        }
        for ($i=50; $i < 101; $i++) {
            $storeName = new Quran();
            $storeName->namesuraheng = $t->surah($i)->data->englishName;
            $storeName->save();
        }
        for ($i=100; $i < 115; $i++) {
            $storeName = new Quran();
            $storeName->namesuraheng = $t->surah($i)->data->englishName;
            $storeName->save();
        }
        return view('test', [
            'test' => $t
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function pertanyaan($nomor) {
        $t = new \AlQuranCloud\ApiClient\Client();

//        $randomAyat =  rand(1, 4);
        //112 = al ikhlas
        $fullAyat = $t->ayah('112:3')->data->text;

        $pjgString = strlen($fullAyat);

        $sub = mb_substr($fullAyat,14,1,'utf-8');
//        $sub = substr($fullAyat,0,13);

        return view('classic/pertanyaan-luthfi',[
            'pertanyaan' => $fullAyat,
            'panjang' => $pjgString,
            'sub' => $sub
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Quran  $quran
     * @return \Illuminate\Http\Response
     */
    public function show(Quran $quran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Quran  $quran
     * @return \Illuminate\Http\Response
     */
    public function edit(Quran $quran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Quran  $quran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quran $quran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Quran  $quran
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quran $quran)
    {
        //
    }
}
