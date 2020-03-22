<?php

namespace App\Http\Controllers;

use App\PortfolioAbout;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioAboutStore;
use App\Http\Requests\PortfolioAboutUpdate;

class PortfolioAboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PortfolioAbout=PortfolioAbout::get();
        return view('admin.PortfolioAbout',compact('PortfolioAbout'));
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
    public function store(PortfolioAboutStore $request)
    {

      if (  PortfolioAbout::create($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('portfolio-about')->with('success','Portfolio About Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Portfolio About Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortfolioAbout  $portfolioAbout
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioAbout $portfolioAbout)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioAbout  $portfolioAbout
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioAbout $portfolioAbout)
    {
      if ($portfolioAbout) {
        return view('admin.PortfolioAbout_Edit',compact('portfolioAbout'));
      }else {
          return redirect()->route('404')->with('failed','Portfolio About Info Not Found');
      }

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioAbout  $portfolioAbout
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioAboutUpdate $request, PortfolioAbout $portfolioAbout)
    {
      if ( $portfolioAbout->update($request->all())) {

        return redirect()->route('portfolio-about')->with('success','Portfolio About Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Portfolio About Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioAbout  $portfolioAbout
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioAbout $portfolioAbout)
    {
      if (  $portfolioAbout) {
          $portfolioAbout->delete();
          return redirect()->route('portfolio-about')->with('success', 'Portfolio About Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Portfolio About Info Deleted Failed');
      }
    }
}
