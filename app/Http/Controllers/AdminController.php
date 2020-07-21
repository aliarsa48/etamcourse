<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\User;
use App\Course;

class AdminController extends Controller
{
    public function index()
    {
    	$kursusaktif = Course::where('status','=','active')->count();
    	$kursusmenungguverifikasi = Course::where('status','=','non-active')->count();
    	$kursusexpired = Course::where('status','=','expired')->count();
    	$totalmurid = User::where('level','=','murid')->count();
    	$totalpengajar = User::where('level','=','pengajar')->count();
    	$pembayaranbaru = DB::table('enrolls')
					->join('courses','enrolls.course_id','=','courses.id')
					->join('users','enrolls.student_id','=','users.id')
					->select('enrolls.*','courses.*','enrolls.id as nomor','enrolls.status as statusenroll','users.name')
					->where('enrolls.status','menunggu verifikasi')
					->orderBy('statusenroll')
					->count();
    	$permintaanpencairan = DB::table('payments')
					->join('users','payments.teacher_id','=','users.id')
					->join('courses','payments.course_id','=','courses.id')
					->select('payments.*','users.name','courses.title')
					->where('payments.buktipencairan','=',NULL)
					->count();
        return view('dashboard.admin',compact('kursusaktif','kursusmenungguverifikasi','kursusexpired','totalmurid','totalpengajar','pembayaranbaru','permintaanpencairan'));
    }
}
