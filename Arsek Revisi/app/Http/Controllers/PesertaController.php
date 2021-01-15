<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\peserta;
use Illuminate\Support\Facades\DB;

class PesertaController extends Controller
{
    public function index()
    {
        $peserta = peserta::get();
        return view('peserta.peserta', compact('peserta'));
    }
    public function create()
    {
        return view('peserta/inputpeserta');
    }
    public function store(Request $request)
    {
      $request->validate([
            'nama' => 'required',
            'kelas'=> 'required',
            'nis'=> 'required',
            'namaevent'=>'required',
        ]);
        

        peserta::create($request->all());
     
        return redirect('/homesiswa');
    }
    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
     
         // mengambil data dari table pegawai sesuai pencarian data
        $peserta = DB::table('peserta')
        ->where('namaevent','like',"%".$cari."%")
        ->paginate();
     
            // mengirim data pegawai ke view index
        return view('peserta.peserta',['peserta' => $peserta]);
     
    }
}


