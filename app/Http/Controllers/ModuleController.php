<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Module;
use App\Course;
use App\Http\Controllers\Redirect;

class ModuleController extends Controller
{
    public function index($id) {
        // $userid = Auth::user()->id;
        // $module = Module::where('course',$userid)
        $course = Course::find($id);
        $module = Module::where('course_id',$id)->get();
        //return json_decode($module);
        return view('/pages/module',compact('course','module'))->with('no',1);
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
        
        //return json_decode($request->course_id);

      	return redirect('/teacher/courses/'.$request->course_id.'/modules');;
    }

    public function view($id,$idbab) {
        $course = Course::find($id);
        $module = Module::firstWhere('id',$idbab);
        //return json_encode($module);
        return view('dashboard/teacher/viewmodule',compact('course','module')); 
    }

    public function edit($id,$idbab) {
        $course = Course::find($id);
        $module = Module::where('id',$idbab)->first();

        return view('/dashboard/teacher/editmodule',compact('course','module'));
    }

    public function editing($id,Request $request) {
        //dd($request->all(), $id);
        //return $request;
        // $this->validate($request,[
        //     'judul' => 'required',

        // ]);

        $idbab = Module::find($id);
        $namafile = $idbab->filemodule;
	    $idbab->judul = $request->judul;
        
        if($request->hasFile('filemodule')) {
            // $image = $request->file('filemodule');
            // $filename = $image->getClientOriginalName();
            // $image->move(public_path('module'), $filename);
            // $idbab->image = $request->file('filemodule')->getClientOriginalName();
            $file = $request->file('filemodule');
		    $nama_file = time()."_".$file->getClientOriginalName();
		    $tujuan_upload = 'module';
            $file->move($tujuan_upload,$nama_file);
            $idbab->filemodule = $nama_file;
        } else {
            
        }

        $idbab->save();
        //return json_decode($idbab);
        return redirect('/teacher/courses/'.$idbab->course_id.'/modules/'.$idbab->id);
    }

    public function delete($id,$idbab){
        $delete = Module::find($idbab);
        $delete->delete();
        return redirect('/teacher/courses/'.$delete->course_id.'/modules/');
    }

    public function firstpage($id) {
        $course = Course::where('id','=',$id)->first();
        $judulbab = Module::where('course_id',$id)->get();
        $f = $judulbab[0]->id;
        //$idbab = $judulbab->id;
        //$idbab = Module::where('id','=',$idbab)->get();
        //$module = Module::where('id','=',$idbab)->get();
        //return $array[2];
        return redirect('/student/courses/'.$course->id.'/module/1');
    }

    public function openmodule($id, $bab) {
        $course = Course::where('id','=',$id)->first();
        $judulbab = Module::where('course_id',$id)->get();
        $pagebab = $judulbab->toArray();
        $jumlahbab = count($pagebab);
        $z = $bab;
        $i = $bab-2;
        // $index = $pagebab[$i]['id'];
        return view('/dashboard/student/module',compact('course','judulbab','pagebab','jumlahbab','z','i'))->with('no',1);
    }
}
