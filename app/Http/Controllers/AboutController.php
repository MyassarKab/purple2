<?php

namespace App\Http\Controllers;

use App\About;
use App\Timeline;
use App\Counter;
use Illuminate\Http\Request;
use App\Http\Requests\AboutUpdate;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $About=About::get();
      return view('admin.AboutAll',compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.AboutAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (  About::create($request->all())) {

          return redirect()->route('About')->with('success','About  Info Addes successflly');
        } else {
          return redirect()->back()->with('failed','About Info Added Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
      $About=About::first();
      $Timeline=Timeline::orderBy('date','asc')->get();
      $Counter=Counter::get();
      return view('About',compact('About','Timeline','Counter'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {

      if ($about) {
        return view('admin.AboutAdd',compact('about'));
      }else {
          return redirect()->route('404')->with('failed','About Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function update(AboutUpdate $request, About $about)
    {
      if ( $about->update($request->all())) {

        return redirect()->route('About')->with('success','About Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','About Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\About  $about
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        //
    }
}
