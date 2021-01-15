<?php

namespace App\Http\Controllers;

use App\Models\profilsiswa;
use Illuminate\Http\Request;

class ProfilsiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function show(profilsiswa $profilsiswa)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('profile.edit', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->user()->update(
            $request->all()
        );
        return redirect()->route('profile.edit');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profilsiswa  $profilsiswa
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilsiswa $profilsiswa)
    {
        //
    }
}
