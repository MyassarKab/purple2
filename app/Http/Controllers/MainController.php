<?php

namespace App\Http\Controllers;
use App\Department;
use App\Sketch;
use App\Service;
use App\Testimonial;
use Illuminate\Http\Request;

class MainController extends Controller
{
  public function Main()
 {
   $Departments=Department::orderBy('schedule','DESC')->get();
   $Sketch=Sketch::get();
   $Service=Service::get();
   $Testimonial=Testimonial::get();
   return view('main',compact('Departments','Sketch','Service','Testimonial'));
 }

}
