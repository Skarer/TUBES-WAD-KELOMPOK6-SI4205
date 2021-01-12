<?php

namespace App\Http\Controllers;

use App\Models\event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $events = event::get();
        if($events->isEmpty()) {
            session()->flash('empty', 'Tidak ada kegiatan');
        }
        return view('kegiatan.kegiatansiswa', compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kegiatan/inputkegiatan');
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
            'nama' => 'required',
            'deskripsi' => 'required',
        //   'gambar' => 'required|image|mimes:jpg,jpeg,png,jfif|max:2048',
            'kategori' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_berakhir' => 'required',
            'tempat' => 'required',
        ]);
        // $file = $request->file('gambar');
        // $newname = rand() . '.' . $file->getClientOriginalExtension();
        // // dd($newname);
        // $file->move(public_path('img'), $newname);

        // $event['gambar'] = $newname;

        event::create($request->all());
      //  event::create($event);
        // event::create($request->all());
        return redirect('/homeguru');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(event $event)
    {
        return view('kegiatan.editkegiatan', compact('event'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, event $event)
    {
        $request->validate([
            'nama' => 'required',
            'deskripsi' => 'required',
            'kategori' => 'required',
            'tanggal' => 'required',
            'jam_mulai' => 'required',
            'jam_berakhir' => 'required',
            'tempat' => 'required',
        ]);
        // DB::table('events')->where('id',$request->id)
       event::where('id', $event->id)
            ->update ([
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'kategori' => $request->kategori,
                'tanggal' => $request->tanggal,
                'jam_mulai' => $request->jam_mulai,
                'jam_berakhir' => $request->jam_berakhir,
                'tempat' => $request->tempat,
            ]);

        return redirect('/homeguru');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(event $event)
    {
        event::destroy($event->id);

        return redirect ('/homeguru');
    }
}
