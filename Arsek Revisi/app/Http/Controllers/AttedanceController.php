<?php

namespace App\Http\Controllers;

use App\Models\attedance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttedanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $attedances = attedance::get();
        return view ('presensi.absensiswa', compact('attedances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('presensi.inputabsen');
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
            'kelas' => 'required',
            'tanggal' => 'required',
            'mata_pelajaran' => 'required',
            'absen' => 'required',
        ]);

        attedance::create($request->all());

        return redirect('/absen');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\attedance  $attedance
     * @return \Illuminate\Http\Response
     */
    public function show(attedance $attedance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\attedance  $attedance
     * @return \Illuminate\Http\Response
     */
    public function edit(attedance $attedance)
    {
        return view('presensi.editabsen', compact('attedance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\attedance  $attedance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, attedance $attedance)
    {
        $request->validate([
            'nis' => 'required',
            'nama' => 'required',
            'kelas' => 'required',
            'tanggal' => 'required',
            'mata_pelajaran' => 'required',
            'absen' => 'required',
        ]);

        attedance::where('id', $attedance->id)
            ->update ([
                'nis' => $request->nis,
                'nama' => $request->nama,
                'kelas' => $request->kelas,
                'tanggal' => $request->tanggal,
                'mata_pelajaran' => $request->mata_pelajaran,
                'absen' => $request->absen,

            ]);
            
            return redirect('/absen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\attedance  $attedance
     * @return \Illuminate\Http\Response
     */
    public function destroy(attedance $attedance)
    {
        attedance::destroy($attedance->id);

        return redirect('/absen');
    }

    public function cari(Request $request) 
    {
        //menangkap data pencarian
        $cari = $request->cari;
        
        //mengambil data dari tabel absen
        $attedances = DB::table('attedances')
        ->where('nis','like',"%".$cari."%")
        ->paginate();

        //mengirim data pegawai ke halaman absen
        return view('presensi.absensiswa',['attedances' => $attedances]);
    }
}
