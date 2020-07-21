<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Course;
use Auth;

class CoursesController extends Controller
{
	public function kursus()
	{
		$teacher_id = Auth::user()->id;
		$kursus = DB::table('courses')->where('teacher_id', '=', $teacher_id)->orderBy('status')->get();
		return view('dashboard/teacher/kursus',['kursus' => $kursus]);
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

      	return redirect('/teacher/courses');
    }

    public function show(Course $kursus,$id){
    	// $detail = 'courses';
    	// $show = Course::findOrFail($course_id);
    	$kursus = Course::find($id);
    	$kuota = DB::table('enrolls')
    				->select('course_id')
					->where('course_id','=',$id)
					->count();
    	$k = DB::table('courses')
    			->select('kuota')
    			->first();
    	$kuotasekarang = ($k->kuota)-($kuota);
    	$hitung = ($k->kuota)-($kuotasekarang);
    	// echo $k->kuota.'<br>';
    	// echo $kuota.'<br>';
    	// return json_encode($hitung);
    	if(!$kursus) return redirect()->back();
    	return view('dashboard/teacher/detailkursus',compact('kursus','hitung'));
    }

    public function edit($id){
	   $id = Course::find($id);
	   return view('dashboard/teacher/editkursus', ['id' => $id]);
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
	    return redirect('/teacher/courses');
	}

	public function delete($id)
	{
	    $delete = Course::find($id);
	    $delete->delete();
	    return redirect('/teacher/courses');
	}

	public function category1(Course $id){
		$kursus = DB::table('courses')->where('category','=','Pengembangan Web')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
		return view('cat1',['kursus' => $kursus]);
	}

	public function category2(Course $id){
		$kursus = DB::table('courses')->where('category','=','Database')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
		return view('cat2',['kursus' => $kursus]);
	}
	public function category3(Course $id){
		$kursus = DB::table('courses')->where('category','=','Jaringan')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
		return view('cat3',['kursus' => $kursus]);
	}

	public function category4(Course $id){
		$kursus = DB::table('courses')->where('category','=','Desain')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
		return view('cat4',['kursus' => $kursus]);
	}

	public function category5(Course $id){
		$kursus = DB::table('courses')->where('category','=','Marketing')->where('status', '=', 'active')->whereRaw('kuotaterisi < kuota')->get();
		return view('cat5',['kursus' => $kursus]);
	}

	public function coursedetail($id){
		$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->where('courses.id',$id)->where('courses.status','active')->first();
		if(!$kursus) return redirect()->back();
		if($kursus->kuotaterisi > $kursus->kuota) return redirect()->back();
		return view('coursedetail',compact('kursus'));
    }

    public function updatelink($id)
    {
    	$id = Course::find($id);
    	//return json_encode($id);
	   	return view('dashboard/admin/editlink', ['id' => $id]);
    }

    public function pertemuan($id, Request $request)
    {
    	$this->validate($request,[
			'link' => 'required',
	    ]);

    	$kursus = DB::table('courses')
					->join('users','courses.teacher_id','=','users.id')
					->select('courses.*','users.name')
					->where('courses.id',$id)->first();

		$pertemuan = $kursus->pertemuanke;
    	$id = Course::find($id);
	    $id->link = $request->link;
	    $id->pertemuanke = $pertemuan+1;
	    $id->save();

	    return redirect('/admin/courses/');
    }
}
