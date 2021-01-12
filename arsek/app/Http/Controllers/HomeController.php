<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // return view('auth.login');
        $user = auth()->user()->user;
        if ($user == 'guru') {
            return redirect('/homeguru');
        } else if ($user == 'siswa') {
            return redirect('/homesiswa');
        }
        

    }
}
