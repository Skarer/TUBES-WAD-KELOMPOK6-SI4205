<?php

namespace App\Http\Controllers;

use App\Models\score;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ScoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $scores = score::get();
        return view('nilai.nilaisiswa', compact('scores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nilai.inputnilai');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nilai_uts' => 'required',
            'nilai_uas' => 'required',
        ]);

        score::create($request->all());

        return redirect('/nilai');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function show(score $score)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function edit(score $score)
    {
        return view('nilai.editnilai', compact('score'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, score $score)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'mata_pelajaran' => 'required',
            'nilai_uts' => 'required',
            'nilai_uas' => 'required',
        ]);

        score::where('id', $score->id)
            ->update ([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'mata_pelajaran' => $request->mata_pelajaran,
                'nilai_uts' => $request->nilai_uts,
                'nilai_uas' => $request->nilai_uas,

            ]);
            
            return redirect('/nilai');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\score  $score
     * @return \Illuminate\Http\Response
     */
    public function destroy(score $score)
    {
        score::destroy($score->id);

        return redirect('/nilai');
    }

    public function cari(Request $request) 
    {
        //menangkap data pencarian
        $cari = $request->cari;
        
        //mengambil data dari tabel absen
        $score = DB::table('scores')
        ->where('nis','like',"%".$cari."%")
        ->paginate();

        //mengirim data pegawai ke halaman absen
        return view('nilai.nilaisiswa',['scores' => $score]);
    }
}
