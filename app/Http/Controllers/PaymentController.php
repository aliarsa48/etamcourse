<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Enroll;
use App\Course;
use App\Payment;
use Auth;

class PaymentController extends Controller
{
    public function terima($id, Request $request)
	{

	    $id = Enroll::find($id);
	    $id->status = 'aktif';
	    $id->save();

	    $bayar = Course::where('id',$id->course_id)->first();
	    $kuota = $bayar->kuotaterisi;
	    $bayar->kuotaterisi = $kuota+1;
	    $bayar->save();

	    //return json_encode($bayar);

	    return redirect('/admin/payment');
	}

	public function penghasilan()
	{
		$userid = Auth::user()->id;
		$kursus = Course::where('teacher_id',$userid)
					->whereRaw('kuotaterisi >= kuota')
					->whereRaw('pertemuanke >= jumlahpertemuan')
					->whereRaw('statuspencairan != "selesai"')
					->get();
		//return json_encode($kursus);
		return view('/dashboard/teacher/penghasilan',compact('kursus'));
	}

	public function riwayatpencairan()
	{
		$userid = Auth::user()->id;
		$kursus = DB::table('courses')
					->join('payments','courses.id','=','payments.course_id')
					->select('courses.*','payments.buktipencairan')
					->where('courses.teacher_id',$userid)
					->whereRaw('courses.pertemuanke >= courses.jumlahpertemuan')
					->where('statuspencairan','selesai')
					->orderBy('statuspencairan')
					->get();

		return view('/dashboard/teacher/riwayatpencairan',compact('kursus'));
	}

	public function detailpenghasilan($id)
	{
		$kursus = Course::where('id',$id)->first();
		$siswa = $kursus->kuotaterisi;
		$harga = $kursus->price;
		$penghasilan = $siswa * $harga;
		$pajak = $penghasilan*20/100;
		$total = $penghasilan-$pajak;

		$course_id = $kursus->id;
		$buktipencairan = Payment::where('course_id',$course_id)->first();

		//return json_encode($buktipencairan);
		return view('dashboard.teacher.detailpenghasilan',compact('kursus','siswa','penghasilan','pajak','total','buktipencairan'));
	}

	public function request($id,Request $request)
	{
		$this->validate($request, [
			'teacher_id' => 'required',
			'course_id' => 'required',
			'total' => 'required',
			'bank' => 'required',
			'nama' => 'required',
			'norek' => 'required',
		]);

      	Payment::create([
			'teacher_id' => $request->teacher_id,
			'course_id' => $request->course_id,
			'total' => $request->total,
			'bank' => $request->bank,
			'nama' => $request->nama,
			'norek' => $request->norek,
		]);

		$bayar = Course::find($id);
	    $bayar->statuspencairan = 'menunggu';
	    $bayar->save();

      	return redirect('/teacher/payment');
	}
}
