<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Enroll;
use Illuminate\Support\Facades\DB;
use Auth;
use Alert;

class StudentController extends Controller
{

    public function payment()
    {
    	$student_id = Auth::user()->id;
		$tagihan = DB::table('enrolls')
					->join('courses','enrolls.course_id','=','courses.id')
					->select('enrolls.*','courses.*','enrolls.id as nomor','enrolls.status as statusenroll')
					->where('enrolls.student_id',$student_id)
					->where('enrolls.status','!=','aktif')
					->get();
		return view('dashboard/student/payment',compact('tagihan'));
    }

    public function payconfirm($id, Request $request)
    {
    	$this->validate($request, [
			'buktipembayaran' => 'required|file|image|mimes:jpeg,png,jpg',
			'status' => 'required',
		]);

    	$file = $request->file('buktipembayaran');
		$nama_file = time()."_".$file->getClientOriginalName();
		$tujuan_upload = 'enrolls/buktipembayaran';
		$file->move($tujuan_upload,$nama_file);

	    $id = Enroll::find($id);
	    $id->status = $request->status;
	    $id->buktipembayaran = $nama_file;
	    $id->save();
	    
	    return redirect('/student/payment');
    }

    public function cancel($id)
    {
	    $delete = Enroll::find($id);
	    $delete->delete();
	    return redirect('/student/payment');
    }

    public function pay($id)
    {
    	$bayar = DB::table('enrolls')
					->join('courses','enrolls.course_id','=','courses.id')
					->select('enrolls.*','courses.*')
					->where('enrolls.course_id',$id)
					->first();
    	return view('dashboard/student/konfirmasi',compact('bayar'));
    }
}
