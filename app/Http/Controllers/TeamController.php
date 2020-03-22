<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use File;
use App\Http\Requests\TeamStore;
use App\Http\Requests\TeamUpdate;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Team=Team::get();
      return view('admin.TeamAll',compact('Team'));
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
    public function store(TeamStore $request)
    {
      if (  Team::create($request->all())) {

        return redirect()->route('Team')->with('success','Team  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Team Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
      if ($team) {
        return view('admin.TeamEdit',compact('team'));
      }else {
          return redirect()->route('404')->with('failed','Team Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(TeamUpdate $request, Team $team)
    {
        if ( $team->update($request->all())) {

          return redirect()->route('Team')->with('success','Team Info Updaed successflly');
        } else {
          return redirect()->back()->with('failed','Team Info Updaed Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
      $filename=$team->image;

      if ($team) {
          $team->delete();
           File::delete(public_path($filename));

          return redirect()->route('Team')->with('success', 'Team Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','Team Info Deleted Failed');
      }
    }
}
