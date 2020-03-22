<?php

namespace App\Http\Controllers;

use App\Counter;
use Illuminate\Http\Request;
use App\Http\Requests\CounterStore;
use App\Http\Requests\CounterUpdate;


class CounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Counter=Counter::get();
      return view('admin.CounterAll',compact('Counter'));
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
    public function store(CounterStore $request)
    {
      if (  Counter::create($request->all())) {

        return redirect()->route('Counter')->with('success','Counter  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Counter Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function show(Counter $counter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function edit(Counter $counter)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function update(CounterUpdate $request, Counter $counter)
    {
        if ( $counter->update($request->all())) {

          return redirect()->route('Counter')->with('success','Counter Info Updaed successflly');
        } else {
          return redirect()->back()->with('failed','Counter Info Updaed Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Counter  $counter
     * @return \Illuminate\Http\Response
     */
    public function destroy(Counter $counter)
    {
      if ($counter) {
          $counter->delete();

          return redirect()->route('Counter')->with('success', 'Counter Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Counter Info Deleted Failed');
      }
    }
}
