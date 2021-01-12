<?php

namespace App\Http\Controllers;

use App\Models\course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::get();
        return view('pelajaran.pelajaransiswa', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelajaran.inputpelajaran');
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
            'kelas' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'mata_pelajaran' => 'required',
        ]);

        course::create($request->all());

        return redirect('/pelajaran');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function show(course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(course $course)
    {
        return view('pelajaran.editpelajaran', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, course $course)
    {
        $request->validate([
            'kelas' => 'required',
            'hari' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'mata_pelajaran' => 'required',
        ]);

        course::where('id', $course->id)
            ->update ([
                'kelas' => $request->kelas,
                'hari' => $request->hari,
                'jam_mulai' => $request->jam_mulai,
                'jam_selesai' => $request->jam_selesai,
                'mata_pelajaran' => $request->mata_pelajaran,
            ]);

        return redirect('/pelajaran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\course  $course
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        course::destroy($course->id);

        return redirect('/pelajaran');
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
        return view('pelajaran.pelajaransiswa',['courses' => $courses]);
     
    }
}
