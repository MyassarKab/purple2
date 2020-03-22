<?php

namespace App\Http\Controllers;

use App\StudioAbout;
use Illuminate\Http\Request;
use App\Http\Requests\StudioAboutStore;
use App\Http\Requests\StudioAboutUpdate;

class StudioAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $StudioAbout=StudioAbout::get();
      return view('admin.StudioAbout',compact('StudioAbout'));
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
    public function store(StudioAboutStore $request)
    {
      if (  StudioAbout::create($request->all())) {
         return redirect()->route('StudioAbout')->with('success','Studio About Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Studio About Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudioAbout  $studioAbout
     * @return \Illuminate\Http\Response
     */
    public function show(StudioAbout $studioAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudioAbout  $studioAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(StudioAbout $studioAbout)
    {
      if ($studioAbout) {
        return view('admin.StudioAboutEdit',compact('studioAbout'));
      }else {
          return redirect()->route('404')->with('failed','Studio About Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudioAbout  $studioAbout
     * @return \Illuminate\Http\Response
     */
    public function update(StudioAboutUpdate $request, StudioAbout $studioAbout)
    {
      if ( $studioAbout->update($request->all())) {

        return redirect()->route('StudioAbout')->with('success','Studio About Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Studio About Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudioAbout  $studioAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudioAbout $studioAbout)
    {
      if ($studioAbout) {
          $studioAbout->delete();
          return redirect()->route('StudioAbout')->with('success', 'Studio About Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Studio About Info Deleted Failed');
      }
    }
}
