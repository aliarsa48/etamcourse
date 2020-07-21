<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use App\User;
use App\Payment;
use Auth;

class AdminDashboardController extends Controller
{

	public function show(Request $request){
		$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->orderBy('status')
					->orderBy('updated_at')
					->paginate(5);


		return view('dashboard/admin/kursus',['kursus' => $kursus])->with('no',1);
    }

    public function active(Request $request){
		$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->where('courses.status','=','active')
					->whereRaw('courses.pertemuanke < courses.jumlahpertemuan')
					->paginate(5);
		return view('dashboard/admin/kursus',['kursus' => $kursus])->with('no',1);
    }

    public function nonverif(Request $request){
		$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->where('courses.status','=','non-active')
					->paginate(5);
		return view('dashboard/admin/kursus',['kursus' => $kursus])->with('no',1);
    }

    public function expired(Request $request){
		$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->whereRaw('courses.pertemuanke >= courses.jumlahpertemuan')
					->paginate(5);
		return view('dashboard/admin/kursus',['kursus' => $kursus])->with('no',1);
    }

    public function detailkursus(Course $id){
    	return view('dashboard/admin/detailkursus',compact('id'));
    }

    public function kursus()
	{
		$teacher_id = Auth::user()->id;
		$kursus = DB::table('courses')->where('teacher_id', '=', $teacher_id)->get();
		return view('dashboard/admin/kursus',['kursus' => $kursus]);
	}


    public function add(Request $request)
    {
    	$this->validate($request, [
			'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg',
			'teacher_id' => 'required',
			'title' => 'required',
			'description' => 'required',
			'category' => 'required',
			'start_date' => 'required',
			'end_date' => 'required',
			'start_time' => 'required',
			'end_time' => 'required',
			'kuota' => 'required',
			'jumlahpertemuan' => 'required',
			'price' => 'required',
			'status' => 'required',
		]);

      	$file = $request->file('thumbnail');
 
		$nama_file = time()."_".$file->getClientOriginalName();
	 
	      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'courses/thumbnails';
		$file->move($tujuan_upload,$nama_file);

      	Course::create([
			'thumbnail' => $nama_file,
			'teacher_id' => $request->teacher_id,
			'title' => $request->title,
			'description' => $request->description,
			'category' => $request->category,
			'start_date' => $request->start_date,
			'end_date' => $request->end_date,
			'start_time' => $request->start_time,
			'end_time' => $request->end_time,
			'kuota' => $request->kuota,
			'jumlahpertemuan' => $request->jumlahpertemuan,
			'price' => $request->price,
			'status' => $request->status,
		]);

      	return redirect('/admin/courses');
    }

    public function edit($id){
	   $id = Course::find($id);
	   return view('dashboard/admin/editkursus', ['id' => $id]);
	}

	public function update($id, Request $request)
	{
	    $this->validate($request,[
		   'thumbnail' => 'required|file|image|mimes:jpeg,png,jpg',
			'teacher_id' => 'required',
			'title' => 'required',
			'description' => 'required',
			'category' => 'required',
			'start_date' => 'required',
			'end_date' => 'required',
			'start_time' => 'required',
			'end_time' => 'required',
			'kuota' => 'required',
			'jumlahpertemuan' => 'required',
			'price' => 'required',
	    ]);

		    $file = $request->file('thumbnail');
	 
			$nama_file = time()."_".$file->getClientOriginalName();
		 
		      	// isi dengan nama folder tempat kemana file diupload
			$tujuan_upload = 'courses/thumbnails';
			$file->move($tujuan_upload,$nama_file);

	    $id = Course::find($id);
	    $id->thumbnail = $nama_file;
	    $id->teacher_id = $request->teacher_id;
	    $id->title = $request->title;
	    $id->description = $request->description;
	    $id->category = $request->category;
	    $id->start_date = $request->start_date;
	    $id->end_date = $request->end_date;
	    $id->start_time = $request->start_time;
	    $id->end_time = $request->end_time;
	    $id->kuota = $request->kuota;
	    $id->jumlahpertemuan = $request->jumlahpertemuan;
	    $id->price = $request->price;

	    $id->save();
	    return redirect('/admin/courses');
	}

	public function delete($id)
	{
	    $delete = Course::find($id);
	    $delete->delete();
	    return redirect('/admin/courses');
	}

	public function gantistatus($id, Request $request)
	{

	    $id = Course::find($id);
	    $id->status = $request->status;

	    $id->save();
	    return back();
	}

	public function studentpayment()
	{
		$tagihan = DB::table('enrolls')
					->join('courses','enrolls.course_id','=','courses.id')
					->join('users','enrolls.student_id','=','users.id')
					->select('enrolls.*','courses.*','enrolls.id as nomor','enrolls.status as statusenroll','users.name')
					->where('enrolls.status','menunggu verifikasi')
					->orderBy('statusenroll')
					->get();
					//return json_encode($tagihan);
		return view('dashboard/admin/studentpayment',compact('tagihan'));
	}

	public function permintaan()
	{

		$payment = DB::table('payments')
					->join('users','payments.teacher_id','=','users.id')
					->join('courses','payments.course_id','=','courses.id')
					->select('payments.*','users.name','courses.title')
					->where('payments.buktipencairan','=',NULL)
					->get();
		//return json_encode($payment);
		return view('/dashboard/admin/paymentrequest',compact('payment'));
	}

	public function kirimpencairan($id)
	{
		$pencairan = DB::table('payments')
						->join('users','payments.teacher_id','=','users.id')
						->join('courses','payments.course_id','=','courses.id')
						->select('payments.*','users.name','courses.title','courses.kuotaterisi','courses.price')
						->where('payments.id',$id)
						->first();

		//return json_encode($pencairan);
		return view('dashboard/admin/detailpencairan',compact('pencairan'));
	}

	public function proseskirim($id, Request $request)
	{
		$this->validate($request,[
		   'buktipencairan' => 'required|file|image|mimes:jpeg,png,jpg',
	    ]);

		    $file = $request->file('buktipencairan');
	 
			$nama_file = time()."_".$file->getClientOriginalName();
		 
		      	// isi dengan nama folder tempat kemana file diupload
			$tujuan_upload = 'payment/buktipencairan';
			$file->move($tujuan_upload,$nama_file);

	    $id = Payment::find($id);
	    $id->buktipencairan = $nama_file;
	    $id->save();

	    $course_id = $id->course_id;
	    $statuspencairan = Course::where('id',$course_id)->first();
	    $statuspencairan->statuspencairan = 'selesai';
	    $statuspencairan->save();

	    return redirect()->back();
	}

	public function pemateri()
	{
		$pemateri = User::where('level','pengajar')->orderBy('created_at','DESC')->paginate(10);

		//return json_encode($pemateri);
		return view('dashboard/admin/teacher',compact('pemateri'))->with('no', 1);
	}

	public function murid()
	{
		$murid = User::where('level','murid')->orderBy('created_at','DESC')->paginate(10);

		//return json_encode($pemateri);
		return view('dashboard/admin/student',compact('murid'))->with('no', 1);
	}
}

