<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use Auth;

class ProfileController extends Controller
{
    public function profile($id)
    {
    	$user = Auth::user()->id;
    	$profile = User::where('id',$id)->where('level','pengajar')->first();
    	//return json_encode($profile);
    	$kursus = Course::where('teacher_id',$id)->get();
    	if(!$profile) return redirect()->back();
    	if(Auth::user()->level=='admin') return view('profile',compact('profile','kursus'));
    	if(Auth::user()->level=='murid') return view('profilestudent',compact('profile','kursus'));
    	if(Auth::user()->level=='pengajar') return view('profileteacher',compact('profile','kursus'));
    }

    public function myprofile()
    {
        $user = Auth::user()->id;
        $profile = User::where('id',$user)->where('level','pengajar')->first();
        //return json_encode($profile);
        $kursus = Course::where('teacher_id',$user)->get();
        //if(!$profile) return redirect()->back();
        return view('dashboard/teacher/myprofile',compact('profile','kursus'));
    }

    public function edit(Request $request)
    {
        $myid = Auth::user()->id;
        $my = User::find($myid);
        return view('dashboard/teacher/editprofile',compact('my'));
    }

    public function savechange(Request $request)
    {
        $this->validate($request, [
            'avatar' => 'required|file|image|mimes:jpeg,png,jpg',
            'name' => 'required',
            'bio' => 'required',
        ]);

        $file = $request->file('avatar');
 
        $nama_file = time()."_".$file->getClientOriginalName();
     
            // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'profile/avatar';
        $file->move($tujuan_upload,$nama_file);

        $myid = Auth::user()->id;
        $edit = User::find($myid);
        $edit->name = $request->name;
        $edit->avatar = $nama_file;
        $edit->bio = $request->bio;
        $edit->save();

        return redirect('/myprofile');
    }
}
