<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Enroll;
use Auth;

class StudentDashboardController extends Controller
{
    public function mycourse(){
		$userid = Auth::user()->id;
		$mycourse = DB::table('courses')
					->join('enrolls','courses.id','=','enrolls.course_id')
					->join('users','courses.teacher_id','=','users.id')
					->select('enrolls.*','courses.title','users.name as teachername','courses.thumbnail','courses.id as nomor','courses.jumlahpertemuan','courses.pertemuanke')
					->where('enrolls.student_id',$userid)
					->where('enrolls.status','aktif')
					->whereRaw('courses.jumlahpertemuan > courses.pertemuanke')
					->orderBy('updated_at','desc')
					->get();

		$finishedcourse = DB::table('courses')
					->join('enrolls','courses.id','=','enrolls.course_id')
					->join('users','courses.teacher_id','=','users.id')
					->select('enrolls.*','courses.title','users.name as teachername','courses.thumbnail','courses.id as nomor','courses.jumlahpertemuan','courses.pertemuanke')
					->where('enrolls.student_id',$userid)
					->where('enrolls.status','aktif')
					->whereRaw('courses.jumlahpertemuan < courses.pertemuanke')
					->orderBy('updated_at')
					->get();
					//return json_encode($tagihan);
		return view('dashboard/student/kursus',compact('mycourse','finishedcourse'));
    }

    public function kelas($id){
    	$userid = Auth::user()->id;
    	$kelas = DB::table('courses')
				->join('enrolls','courses.id','=','enrolls.course_id')
				->join('users','courses.teacher_id','=','users.id')
				->select('enrolls.*','courses.title','users.name as teachername','courses.thumbnail','users.avatar as foto','courses.link','courses.jumlahpertemuan','courses.pertemuanke','courses.updated_at')
				->where('enrolls.status','aktif')
				->where('courses.id',$id)
				->where('enrolls.student_id',$userid)
				->first();
				//return json_encode($id);
		return view('dashboard/student/interfacekelas',compact('kelas'));
    }
}
