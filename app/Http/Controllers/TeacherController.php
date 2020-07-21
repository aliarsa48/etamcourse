<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use Auth;

class TeacherController extends Controller
{
    public function index()
    {
        $teacher_id = Auth::user()->id;
		$totalkursus = DB::table('courses')
						->select(DB::raw('count(*) as total'))
						->where('teacher_id', '=', $teacher_id)
						->get();

		$data = Course::where('teacher_id',$teacher_id)
						->whereRaw('pertemuanke >= jumlahpertemuan')->get();
		
				$total = 0;
                foreach($data as $hitung)
                {
                    $total1 = $hitung->price*$hitung->kuotaterisi;
                    $total = $total + $total1;
                }
                $jumsubtotal = $total;

        $siswa = Course::where('teacher_id',$teacher_id)->sum('kuotaterisi');

       	$hitungsiswa1 = DB::table('enrolls')
       						->join('courses','courses.id','=','enrolls.course_id')
       						->selectRaw('enrolls.student_id')
       						->where('courses.teacher_id',$teacher_id)
       						->groupBy('enrolls.student_id')
       						->get();

       	$hitungsiswa = count($hitungsiswa1);

        //return json_encode($hitungsiswa);
		return view('dashboard.teacher',compact('totalkursus','jumsubtotal','hitungsiswa'));
    }
}
