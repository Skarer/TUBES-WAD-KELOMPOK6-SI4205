<?php

namespace App\Http\Controllers;

use App\Models\pelajaran;
use Illuminate\Http\Request;
use App\Models\course;
use Illuminate\Support\Facades\DB;

class PelajaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::get();
        return view('siswa.pelajaran', compact('courses'));
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
     * @param  \App\Models\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function show(pelajaran $pelajaran)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function edit(pelajaran $pelajaran)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pelajaran $pelajaran)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pelajaran  $pelajaran
     * @return \Illuminate\Http\Response
     */
    public function destroy(pelajaran $pelajaran)
    {
        //
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
     
         // mengambil data dari table pegawai sesuai pencarian data
        $courses = DB::table('courses')
        ->where('kelas','like',"%".$cari."%")
        ->paginate();
     
            // mengirim data pegawai ke view index
        return view('siswa.pelajaran',['courses' => $courses]);
     
    }
}
