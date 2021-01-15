<?php

namespace App\Http\Controllers;

use App\Models\profilguru;
use Illuminate\Http\Request;

class ProfilguruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
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
     * @param  \App\Models\profilguru  $profilguru
     * @return \Illuminate\Http\Response
     */
    public function show(profilguru $profilguru)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\profilguru  $profilguru
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        return view('profile.profilguru', [
            'user' => $request->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\profilguru  $profilguru
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, profilguru $profilguru)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\profilguru  $profilguru
     * @return \Illuminate\Http\Response
     */
    public function destroy(profilguru $profilguru)
    {
        //
    }
}
