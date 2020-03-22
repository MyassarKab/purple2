<?php

namespace App\Http\Controllers;

use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentStore;
use App\Http\Requests\DepartmentUpdate;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Department=Department::get();
      return view('admin.DepartmentAll',compact('Department'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex()
    {
        $Department=Department::get();
        return response()->json(['success'=>true,'data'=>$Department,'message'=>'']);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.DepartmentAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DepartmentStore $request)
    {
      if (  Department::create($request->all())) {
        // Session::flash('message', "Special message goes here");
        return redirect()->route('department')->with('success','Department  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Department Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
      if ($department) {
        return view('admin.DepartmentEdit',compact('department'));
      }else {
          return redirect()->route('404')->with('failed','Department Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentUpdate $request, Department $department)
    {
        if ( $department->update($request->all())) {
          // Session::flash('message', "Special message goes here");
          return redirect()->route('department')->with('success','Department Info Updaed successflly');
        } else {
          return redirect()->back()->with('failed','Department Info Updaed Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
      if ($department) {
          $department->delete();
          return redirect()->route('department')->with('success', 'Department Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Department Info Deleted Failed');
      }
    }
}
