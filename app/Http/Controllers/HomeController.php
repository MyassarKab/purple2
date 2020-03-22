<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
   {
         return view('admin.index');
   }

   public function AdminEdit( ){
       $admin=User::where('type',1)->first();
       return view('admin.AdminProfile',compact('admin'));
   }
   public function AdminUpdate(Request $request,User $admin){

       $admin->update($request->all());
       return view('admin.AdminProfile',compact('admin'));

   }

 }
