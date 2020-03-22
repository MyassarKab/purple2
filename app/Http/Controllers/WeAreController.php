<?php

namespace App\Http\Controllers;

use App\WeAre;
use Illuminate\Http\Request;
use App\Http\Requests\WeAreUpdate;

class WeAreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $WeAre = WeAre::first();
      return view('admin.WeAre',compact('WeAre'));
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
      if (  WeAre::create($request->all())) {

        return redirect()->route('WeAre')->with('success','We Are Info Added successflly');
      } else {
        return redirect()->back()->with('failed','We Are Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\WeAre  $weAre
     * @return \Illuminate\Http\Response
     */
    public function show(WeAre $weAre)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\WeAre  $weAre
     * @return \Illuminate\Http\Response
     */
    public function edit(WeAre $weAre)
    {
      if ($weAre) {
        return view('admin.WeAreEdit',compact('weAre'));
      }else {
          return redirect()->route('404')->with('failed','We Are Info About Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\WeAre  $weAre
     * @return \Illuminate\Http\Response
     */
    public function update(WeAreUpdate $request, WeAre $weAre)
    {
      if ( $weAre->update($request->all())) {

        return redirect()->route('WeAre')->with('success','We Are Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','We Are Info  Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\WeAre  $weAre
     * @return \Illuminate\Http\Response
     */
    public function destroy(WeAre $weAre)
    {

    }
}
