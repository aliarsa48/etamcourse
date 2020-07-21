<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $kursus = DB::table('courses')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
        return view('/welcome',['courses' => $kursus]);
    }

    public function kursus()
    {
        $kursus = DB::table('courses')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
        return view('/courses',['courses' => $kursus]);
    }
}
