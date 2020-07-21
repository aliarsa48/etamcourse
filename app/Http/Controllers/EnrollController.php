<?php

namespace App\Http\Controllers;

use App\Enroll;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EnrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'kodetagihan' => 'unique:enrolls',
            'student_id' => 'required',
            'kodeunik' => 'required',
            'kodetagihan' => 'required',
            'status' => 'required',
        ]);

        Enroll::create([
            'course_id' => $request->course_id,
            'student_id' => $request->student_id,
            'kodeunik' => $request->kodeunik,
            'kodetagihan' => $request->kodetagihan,
            'status' => $request->status,
        ]);

        return redirect('/student/payment/');
    }

    public function detailtagihan($id)
    {
        $detailtagihan = DB::table('enrolls')
                            ->join('courses','enrolls.course_id','=','courses.id')
                            ->select('enrolls.*','courses.*','enrolls.id as nomor','enrolls.status as statusenroll')
                            ->where('enrolls.id',$id)
                            ->first();
                           // return json_encode($detailtagihan);
        return view('dashboard/student/paymentdetail',compact('detailtagihan'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function show(Enroll $enroll)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function edit(Enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Enroll  $enroll
     * @return \Illuminate\Http\Response
     */
    public function destroy(Enroll $enroll)
    {
        //
    }
}
