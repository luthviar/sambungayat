<?php

namespace App\Http\Controllers;

use App\Pertanyaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PertanyaanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $t = new \AlQuranCloud\ApiClient\Client();
//        dd($t->surah(2)->data);

        $listQuran = DB::table('qurans')
            ->select('id','IDSurat','Word','Trans')
            ->limit(10)
            ->get();
//        dd($listQuran[0]->Word);

        $suratke_str = substr($listQuran[2]->IDSurat,0,3);
        $suratke = (int)$suratke_str;



        $ayatke_str = substr($listQuran[2]->IDSurat,2,1);
        $ayatke = (int)$ayatke_str;

//        dd($ayatke_int +99);
//        return view('home',[
//            'listQuran' => $listQuran
//        ]);

        return view('classic/list_surat',[
            't' => $t,
            'listQuran' => $listQuran,
            'suratke' => $suratke,
            'ayatke' => $ayatke
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
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function quest(Pertanyaan $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pertanyaan $pertanyaan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pertanyaan  $pertanyaan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pertanyaan $pertanyaan)
    {
        //
    }
}
