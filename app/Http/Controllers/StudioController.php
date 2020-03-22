<?php

namespace App\Http\Controllers;

use App\Studio;
use App\StudioAbout;
use App\StudioPortfolio;
use Illuminate\Http\Request;
use App\Http\Requests\StudioStore;
use App\Http\Requests\StudioUpdate;

class StudioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Studio=Studio::get();
      return view('admin.StudioAll',compact('Studio'));
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
    public function store(StudioStore $request)
    {
      if ( Studio::create($request->all())) {

        return redirect()->route('Studio')->with('success','Studio  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Studio Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function show($studio)
    {
        $StudioAbout=StudioAbout::first();
        $StudioInfo=Studio::where('name_en','like',$studio)->first();
        $StudioPortfolio=StudioPortfolio::where('studio_id',$StudioInfo->id)->paginate(10);
        return view('Studio',compact('StudioAbout','StudioInfo','StudioPortfolio'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function edit(Studio $studio)
    {
      if ($studio) {
        return view('admin.StudioEdit',compact('studio'));
      }else {
          return redirect()->route('404')->with('failed','Studio Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function update(StudioUpdate $request, Studio $studio)
    {
      if ( $studio->update($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('Studio')->with('success','Studio Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Studio Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Studio  $studio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Studio $studio)
    {
      if ($studio) {
          $studio->delete();
          return redirect()->route('Studio')->with('success', 'Studio Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Studio Info Deleted Failed');
      }
    }
}
