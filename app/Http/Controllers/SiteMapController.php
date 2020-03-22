<?php

namespace App\Http\Controllers;

use App\SiteMap;
use Illuminate\Http\Request;
use App\Http\Requests\SiteMapStore;
use App\Http\Requests\SiteMapUpdate;

class SiteMapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $SiteMap=SiteMap::get();
      return view('admin.SiteMapAll',compact('SiteMap'));
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
    public function store(SiteMapStore $request)
    {
      if (  SiteMap::create($request->all())) {

        return redirect()->route('SiteMap')->with('success','Site Map Addes successflly');
      } else {
        return redirect()->back()->with('failed','Site Map Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SiteMap  $siteMap
     * @return \Illuminate\Http\Response
     */
    public function show(SiteMap $siteMap)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SiteMap  $siteMap
     * @return \Illuminate\Http\Response
     */
    public function edit(SiteMap $siteMap)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SiteMap  $siteMap
     * @return \Illuminate\Http\Response
     */
    public function update(SiteMapUpdate $request, SiteMap $siteMap)
    {
      if ( $siteMap->update($request->all())) {

        return redirect()->route('SiteMap')->with('success','Site Map Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Site Map  Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SiteMap  $siteMap
     * @return \Illuminate\Http\Response
     */
    public function destroy(SiteMap $siteMap)
    {
      if (  $siteMap) {
          $siteMap->delete();
          return redirect()->route('SiteMap')->with('success', 'Site Map has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Site Map Deleted Failed');
      }
    }
}
