<?php

namespace App\Http\Controllers;

use App\DepartmentImage;
use App\Department;
use Illuminate\Http\Request;
use App\Http\Requests\DepartmentImageStore;
use File;

class DepartmentImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Department=Department::get();
      $DepartmentImage=DepartmentImage::with('Department')->paginate(15);
      return view('admin.DepartmentImages',compact('DepartmentImage','Department'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex($department)
    {
        $DepartmentImage=DepartmentImage::where('department_id',$department)->with('Department')->paginate(15);
        return response()->json(['success'=>true,'data'=>$DepartmentImage,'message'=>'']);
        // return response()->json(['DepartmentImage' => $DepartmentImage]);
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
    public function store(DepartmentImageStore $request)
    {
      $IMAGE=DepartmentImage::create($request->all());

        if ($IMAGE) {

          return redirect()->route('department-images')->with('success','Department Images Addes successflly');
        } else {
          return redirect()->back()->with('failed','Department Images Added Failed');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DepartmentImage  $departmentImage
     * @return \Illuminate\Http\Response
     */
    public function showSlider( $departmentImage)
    {
      $linkValue=str_replace('-', ' ', $departmentImage);
        $Department=Department::where('title_en',$linkValue)->first();
        $DepartmentImage=DepartmentImage::where('department_id',$Department->id)->get();
        return view('slider',compact('DepartmentImage'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DepartmentImage  $departmentImage
     * @return \Illuminate\Http\Response
     */
    public function edit(DepartmentImage $departmentImage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DepartmentImage  $departmentImage
     * @return \Illuminate\Http\Response
     */
    public function update(DepartmentImageStore $request, DepartmentImage $departmentImage)
    {
      if ( $departmentImage->update($request->all())) {

        return redirect()->route('department-images')->with('success','Department Images Updaed successflly');
      } else {
        return redirect()->back()->with('failed','Department Images Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DepartmentImage  $departmentImage
     * @return \Illuminate\Http\Response
     */
    public function destroy(DepartmentImage $departmentImage)
    {
            $filename=$departmentImage->image;

          if ($departmentImage) {
              $departmentImage->delete();
               File::delete(public_path($filename));

              return redirect()->route('department-images')->with('success', 'Department Images has been deleted Successfully');
          }else {
              return redirect()->back()->with('failed','Department Images Deleted Failed');
          }
    }
}
