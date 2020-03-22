<?php

namespace App\Http\Controllers;

use App\AdPortfolioImage;
use App\AdPortfolio;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\AdPortfolioImageStore;
use App\Http\Requests\AdPortfolioImageUpdate;

class AdPortfolioImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Portfolio=AdPortfolio::get();
      $PortfolioImage=AdPortfolioImage::with('AdPortfolio')->paginate(15);
      return view('admin.AdPortfolioImages',compact('PortfolioImage','Portfolio'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex()
    {
      $PortfolioImage=AdPortfolioImage::with('AdPortfolio')->paginate(20);
        return response()->json(['Portfolio' => $PortfolioImage]);
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonFavoret()
    {
      $AdPortfolioImage=AdPortfolioImage::whereIn('id', [1, 2, 3])->with('AdPortfolio')->paginate(20);
        return response()->json(['Portfolio' => $AdPortfolioImage]);
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
    public function store(AdPortfolioImageStore $request)
    {
      if (  AdPortfolioImage::create($request->all())) {

        return redirect()->route('adPortfolio-images')->with('success','963ad Portfolio Image  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','963ad Portfolio Image Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\AdPortfolioImage  $adPortfolioImage
     * @return \Illuminate\Http\Response
     */
    public function show(AdPortfolioImage $adPortfolioImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\AdPortfolioImage  $adPortfolioImage
     * @return \Illuminate\Http\Response
     */
    public function edit(AdPortfolioImage $adPortfolioImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\AdPortfolioImage  $adPortfolioImage
     * @return \Illuminate\Http\Response
     */
    public function update(AdPortfolioImageUpdate $request, AdPortfolioImage $adPortfolioImage)
    {
      if ( $adPortfolioImage->update($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('adPortfolio-images')->with('success','adPortfolio Image Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','adPortfolio Image Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\AdPortfolioImage  $adPortfolioImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdPortfolioImage $adPortfolioImage)
    {
          $filename=$adPortfolioImage->image;

        if ($adPortfolioImage) {
            $adPortfolioImage->delete();
             File::delete(public_path($filename));

            return redirect()->route('adPortfolioImage')->with('success', 'AdPortfolio Images has been deleted Successfully');
        }else {
            return redirect()->back()->with('failed','AdPortfolio Images Deleted Failed');
        }
    }
}
