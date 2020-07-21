<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
//PAGINATION KONTAK (OZI)
use Illuminate\Support\Facades\DB;

class ContactController extends Controller
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
        $this->validate($request,[
            'firstname' => 'required',
            'lastname' => 'required',
            'emailaddress' => 'required',
            'telnumber' => 'required',
            'message' => 'required',           
        ]);

         Contact::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'emailaddress' => $request->emailaddress,
            'telnumber' => $request->telnumber,
            'message' => $request->message,          
        ]);
         return redirect('/contact');                
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */

    //KONTAK DAN PAGINATION (OZI)
    public function show(Contact $contact)
    {
        //KONTAK KE ADMIN (OZI)
        $contact = Contact::paginate(10);
        return view('dashboard/admin/lihatpesan', ['contact' => $contact]);

    }

    public function show2()
    {
                // mengambil data dari table pegawai
        $contact = DB::table('contacts')->paginate(3);
 
                // mengirim data pegawai ke view index
        return view('dashboard/admin/lihatpesan',['contact' => $contact]);
 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
