<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioAbout;
use App\PortfolioImage;
use Illuminate\Http\Request;
use App\Http\Requests\PortfolioStore;
use App\Http\Requests\PortfolioUpdate;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $portfolio=Portfolio::get();
        return view('admin.PortfolioAll',compact('portfolio'));
    }
      /**
       * Display a listing of the resource Json for api.
       *
       * @return \Illuminate\Http\Response
       */
      public function JsonIndex()
      {
          $portfolio=Portfolio::get();
          return response()->json(['success'=>true,'data'=>$portfolio,'message'=>'']);
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
    public function store(PortfolioStore $request)
    {
      if (  Portfolio::create($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('portfolio')->with('success','Portfolio Addes successflly');
      } else {
        return redirect()->back()->with('failed','Portfolio Added Failed');
      }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request,$portfolio)
    {
         $PortfolioInfo=Portfolio::where('name_en','like',$portfolio)->first();
         $PortfolioImage=PortfolioImage::Where('portfolio_id',$PortfolioInfo->id)->paginate(10);
         $PortfolioAbout=PortfolioAbout::first();
         if ($request->ajax()) {
           return view('Ajax_Portfolio', compact('PortfolioImage','PortfolioInfo'));
         }
         return view('Portfolio',compact('PortfolioInfo','PortfolioAbout','PortfolioImage'));

    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function edit(Portfolio $portfolio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function update(PortfolioUpdate $request, Portfolio $portfolio)
    {
      if ( $portfolio->update($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('portfolio')->with('success','Portfolio Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Portfolio Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Portfolio  $portfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Portfolio $portfolio)
    {
      if (  $portfolio) {
          $portfolio->delete();
          return redirect()->route('portfolio')->with('success', 'Portfolio has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Portfolio Deleted Failed');
      }




    }
}
