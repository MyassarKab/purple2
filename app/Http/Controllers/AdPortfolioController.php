<?php

namespace App\Http\Controllers;

use App\AdPortfolio;
use Illuminate\Http\Request;
use App\Http\Requests\AdPortfolioStore;
use App\Http\Requests\AdPortfolioUpdate;

class AdPortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $AdPortfolio=AdPortfolio::get();
        return view('admin.AdPortfolioAll',compact('AdPortfolio'));
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
    public function store(AdPortfolioStore $request)
    {
      if (  AdPortfolio::create($request->all())) {

        return redirect()->route('AdPortfolio')->with('success','AdPortfolio Addes successflly');
      } else {
        return redirect()->back()->with('failed','AdPortfolio Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdPortfolio  $adPortfolio
     * @return \Illuminate\Http\Response
     */
    public function show(AdPortfolio $adPortfolio)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdPortfolio  $adPortfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(AdPortfolio $adPortfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdPortfolio  $adPortfolio
     * @return \Illuminate\Http\Response
     */
    public function update(AdPortfolioUpdate $request, AdPortfolio $adPortfolio)
    {
      if ( $adPortfolio->update($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('AdPortfolio')->with('success','AdPortfolio Updaed successflly');
      } else {
        return redirect()->back()->with('failed','AdPortfolio Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdPortfolio  $adPortfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdPortfolio $adPortfolio)
    {
      if (  $adPortfolio) {
          $adPortfolio->delete();
          return redirect()->route('AdPortfolio')->with('success', 'AdPortfolio has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','AdPortfolio Deleted Failed');
      }
    }
}
