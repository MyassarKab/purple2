<?php

namespace App\Http\Controllers;

use App\Sketch;
use Illuminate\Http\Request;
use App\Http\Requests\SketchStore;
use File;
class SketchController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sketch=Sketch::get();
        return view('admin.SketchAll',compact('sketch'));
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
    public function store(SketchStore $request)
    {
        if (Sketch::create($request->all())) {

          return redirect()->route('sketch')->with('success','Sketch Images Addes successflly');
        } else {
          return redirect()->back()->with('failed','Sketch Images Added Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sketch  $sketch
     * @return \Illuminate\Http\Response
     */
    public function show(Sketch $sketch)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sketch  $sketch
     * @return \Illuminate\Http\Response
     */
    public function edit(Sketch $sketch)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sketch  $sketch
     * @return \Illuminate\Http\Response
     */
    public function update(SketchStore $request, Sketch $sketch)
    {
      if ( $sketch->update($request->all())) {

        return redirect()->route('sketch')->with('success','Sketch Images Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Sketch Images Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sketch  $sketch
     * @return \Illuminate\Http\Response
     */
    public function destroy(Sketch $sketch)
    {

            $sketchImage=$sketch->sketch;
            $finalImage=$sketch->final;


          if ($sketch) {
              $sketch->delete();
               File::delete(public_path($sketchImage));
               File::delete(public_path($finalImage));

              return redirect()->route('sketch')->with('success', 'Sketch Images has been deleted Successfully');
          }else {
              return redirect()->back()->with('failed','Sketch Images Deleted Failed');
          }
    }
}
