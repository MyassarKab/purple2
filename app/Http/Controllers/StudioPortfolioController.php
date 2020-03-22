<?php

namespace App\Http\Controllers;

use App\StudioPortfolio;
use App\Studio;
use Illuminate\Http\Request;
use App\Http\Requests\StudioPortfolioStore;
use File;

class StudioPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Studio=Studio::get();
      $StudioPortfolio=StudioPortfolio::with('Studio')->paginate(15);
      return view('admin.StudioPortfolio',compact('StudioPortfolio','Studio'));
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
    public function store(StudioPortfolioStore $request)
    {


    if (StudioPortfolio::create($request->all())) {

      return redirect()->route('StudioPortfolio')->with('success','Studio Portfolio Images Addes successflly');
    } else {
      return redirect()->back()->with('failed','Studio Portfolio Images Added Failed');
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\StudioPortfolio  $studioPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(StudioPortfolio $studioPortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\StudioPortfolio  $studioPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(StudioPortfolio $studioPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\StudioPortfolio  $studioPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(StudioPortfolioStore $request, StudioPortfolio $studioPortfolio)
    {
        if ( $studioPortfolio->update($request->all())) {

          return redirect()->route('StudioPortfolio')->with('success','Studio Portfolio Images Updaed successflly');
        } else {
          return redirect()->back()->with('failed','Studio Portfolio Images Updaed Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\StudioPortfolio  $studioPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(StudioPortfolio $studioPortfolio)
    {
          $filename=$studioPortfolio->image;

          if ($studioPortfolio) {
              $studioPortfolio->delete();
               File::delete(public_path($filename));

              return redirect()->route('StudioPortfolio')->with('success', 'Studio Portfolio Images has been deleted Successfully');
          }else {
              return redirect()->back()->with('failed','Studio Portfolio Images Deleted Failed');
          }
    }
}
