<?php

namespace App\Http\Controllers;

use App\ContactInfo;
use Illuminate\Http\Request;
use App\Http\Requests\ContactInfoUpdate;

class ContactInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $ContactInfo=ContactInfo::first();

      return view('admin.ContactInfo',compact('ContactInfo'));
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
      if (  ContactInfo::create($request->all())) {

        return redirect()->route('ContactInfo')->with('success','Contact Info Added successflly');
      } else {
        return redirect()->back()->with('failed','Contact Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function show(ContactInfo $contactInfo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function edit(ContactInfo $contactInfo)
    {
      if ($contactInfo) {
        return view('admin.ContactInfoEdit',compact('contactInfo'));
      }else {
          return redirect()->route('404')->with('failed','contact Info About Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function update(ContactInfoUpdate $request, ContactInfo $contactInfo)
    {
      if ( $contactInfo->update($request->all())) {

        return redirect()->route('ContactInfo')->with('success','Contact Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Contact Info  Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ContactInfo  $contactInfo
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContactInfo $contactInfo)
    {

    }
}
