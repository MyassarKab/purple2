<?php

namespace App\Http\Controllers;

use App\Service;
use Illuminate\Http\Request;
use App\Http\Requests\ServiceStore;
use App\Http\Requests\ServiceUpdate;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Service=Service::get();
        return view('admin.ServiceAll',compact('Service'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex()
    {
        $Service=Service::get();
        return response()->json(['success'=>true,'data'=>$Service,'message'=>'']);
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
    public function store(ServiceStore $request)
    {

            if (  Service::create($request->all())) {
              return redirect()->route('Service')->with('success','Service Info Addes successflly');
            } else {
              return redirect()->back()->with('failed','Service Info Added Failed');
            }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit(Service $service)
    {
      if ($service) {
        return view('admin.Service_Edit',compact('service'));
      }else {
          return redirect()->route('404')->with('failed','Service Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(ServiceUpdate $request, Service $service)
    {
      if ( $service->update($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('Service')->with('success','Service Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Service Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy(Service $service)
    {
      if (  $service) {
          $service->delete();
          return redirect()->route('Service')->with('success', 'Service Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Service Info Deleted Failed');
      }
    }
}
