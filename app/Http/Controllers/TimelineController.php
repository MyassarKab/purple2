<?php

namespace App\Http\Controllers;

use App\Timeline;
use Illuminate\Http\Request;
use App\Http\Requests\TimelineStore;
use App\Http\Requests\TimelineUpdate;

class TimelineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Timeline=Timeline::get();
      return view('admin.TimelineAll',compact('Timeline'));
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
    public function store(TimelineStore $request)
    {
        if (  Timeline::create($request->all())) {
          return redirect()->route('Timeline')->with('success','Timeline Info Addes successflly');
        } else {
          return redirect()->back()->with('failed','Timeline Info Added Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function show(Timeline $timeline)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function edit(Timeline $timeline)
    {
      if ($timeline) {
        return view('admin.TimelineEdit',compact('timeline'));
      }else {
          return redirect()->route('404')->with('failed','Timeline Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function update(TimelineUpdate $request, Timeline $timeline)
    {
      if ( $timeline->update($request->all())) {

        return redirect()->route('Timeline')->with('success','Timeline Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Timeline Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Timeline  $timeline
     * @return \Illuminate\Http\Response
     */
    public function destroy(Timeline $timeline)
    {
      if (  $timeline) {
          $timeline->delete();
          return redirect()->route('Timeline')->with('success', 'Timeline Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Timeline Info Deleted Failed');
      }
    }
}
