<?php

namespace App\Http\Controllers;

use App\PortfolioImage;
use App\Portfolio;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\PortfolioImageStore;
use App\Http\Requests\PortfolioImageUpdate;

class PortfolioImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $Portfolio=Portfolio::get();
         $PortfolioImage=PortfolioImage::with('Portfolio')->paginate(15);
         return view('admin.PortfolioImages',compact('PortfolioImage','Portfolio'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex($portfolio)
    {

      $PortfolioImage=PortfolioImage::where('portfolio_id',$portfolio)->with('Portfolio')->paginate(20);

        return response()->json(['success'=>true,'data'=>$PortfolioImage,'message'=>'']);
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonFavoret(Request $request)
    {
        $arr=$request->all();


      $PortfolioImage=PortfolioImage::whereIn('id', $arr)->with('Portfolio')->paginate(20);
        return response()->json(['success'=>true,'data' => $PortfolioImage,'message'=>'']);
    }

    public function JsonSearch(Request $request)
    {
        $query=$request->all();
         
      $PortfolioImage=PortfolioImage::where('title_en','like','%'.$query['query'].'%')->orWhere('title_ar','like','%'.$query['query'].'%')->with('Portfolio')->paginate(20);
        return response()->json(['success'=>true,'data' => $PortfolioImage,'message'=>'']);
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
    public function store(PortfolioImageStore $request)
    {


         $slug = str_replace(' ', '-', $request->title_en);

          $IMAGE=PortfolioImage::create([
            'image'=>  $request->image,
            'portfolio_id'=>  $request->portfolio_id,
            'slug'=>  $slug,
            'title_en'=>  $request->title_en,
            'title_ar'=>  $request->title_en,
            // 'width' => $request->width,
            // 'height'=> $request->height
          ]);

        if ($IMAGE) {

          return redirect()->route('portfolio-images')->with('success','Portfolio Images Addes successflly');
        } else {
          return redirect()->back()->with('failed','Portfolio Images Added Failed');
        }



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PortfolioImage  $portfolioImage
     * @return \Illuminate\Http\Response
     */
    public function show(PortfolioImage $portfolioImage)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PortfolioImage  $portfolioImage
     * @return \Illuminate\Http\Response
     */
    public function edit(PortfolioImage $portfolioImage)
    {
          $Portfolio=Portfolio::get();
         if ($portfolioImage) {
           return view('admin.PortfolioImages_Edit',compact('portfolioImage','Portfolio'));

         }else {
            return redirect()->route('404')->with('failed','Portfolio Image Info Not Found');
         }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PortfolioImage  $portfolioImage
     * @return \Illuminate\Http\Response
     */

    public function update(PortfolioImageUpdate $request, PortfolioImage $portfolioImage)
    {
      if ( $portfolioImage->update($request->all())) {

        return redirect()->route('portfolio-images')->with('success','Portfolio Images Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Portfolio Images Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PortfolioImage  $portfolioImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(PortfolioImage $portfolioImage)
    {

        $filename=$portfolioImage->image;

      if ($portfolioImage) {
          $portfolioImage->delete();
           File::delete(public_path($filename));

          return redirect()->route('portfolio-images')->with('success', 'Portfolio Images has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Portfolio Images Deleted Failed');
      }
    }
}
