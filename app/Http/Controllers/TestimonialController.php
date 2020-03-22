<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use App\Http\Requests\TestimonialStore;
use App\Http\Requests\TestimonialUpdate;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
      $Testimonial=Testimonial::get();
      return view('admin.TestimonialAll',compact('Testimonial'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('admin.TestimonialAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TestimonialStore $request)
    {
      if (  Testimonial::create($request->all())) {

        return redirect()->route('Testimonial')->with('success','Testimonial  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Testimonial Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
      if ($testimonial) {
        return view('admin.TestimonialEdit',compact('testimonial'));
      }else {
          return redirect()->route('404')->with('failed','Department Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(TestimonialUpdate $request, Testimonial $testimonial)
    {
          if ( $testimonial->update($request->all())) {

            return redirect()->route('Testimonial')->with('success','Testimonial Info Updaed successflly');
          } else {
            return redirect()->back()->with('failed','Testimonial Info Updaed Failed');
          }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
      if ($testimonial) {
          $testimonial->delete();
          return redirect()->route('Testimonial')->with('success', 'Testimonial Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Testimonial Info Deleted Failed');
      }
    }
}
