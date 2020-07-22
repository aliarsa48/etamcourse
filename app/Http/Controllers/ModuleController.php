<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Module;
use App\Course;

class ModuleController extends Controller
{
    public function index($id) {
        // $userid = Auth::user()->id;
        // $module = Module::where('course',$userid)
        $id = Course::find($id);
        $module = Module::get();
        //return json_encode($module);
        return view('/pages/module',compact('id','module'))->with('no',1);
    }

    public function add($id) {
        $course = Course::find($id);

        return view('/dashboard/teacher/addmodule',compact('course'));
    }

    public function adding(Request $request) {
        $this->validate($request, [
			'filemodule' => 'required|file|mimes:mp4,pdf',
			'judul' => 'required',
		]);

      	$file = $request->file('filemodule');
 
		$nama_file = time()."_".$file->getClientOriginalName();
	 
	      	// isi dengan nama folder tempat kemana file diupload
		$tujuan_upload = 'module';
		$file->move($tujuan_upload,$nama_file);

      	Module::create([
			'filemodule' => $nama_file,
            'judul' => $request->judul,
            'course_id' => $request->course_id
		]);

      	return redirect('/teacher/courses');
    }

    public function firstpage($id) {
        $course = Course::where('id','=',$id)->first();
        $judulbab = Module::where('course_id',$id)->get();
        $f = $judulbab[0]->id;
        //$idbab = $judulbab->id;
        //$idbab = Module::where('id','=',$idbab)->get();
        //$module = Module::where('id','=',$idbab)->get();
        //return json_decode($judulbab[0]->id);
        return redirect('/student/courses/'.$course->id.'/module/'.$f);;
    }

    public function openmodule($id, $idbab) {
        $course = Course::where('id','=',$id)->first();
        $judulbab = Module::where('course_id',$id)->get();
        $idbab = Module::where('id','=',$idbab)->get();
        //$module = Module::where('id','=',$idbab)->get();
        //return json_decode($judulbab);
        return view('/dashboard/student/module',compact('course','idbab','judulbab'))->with('no',1);
    }
}
