<?php

namespace App\Http\Controllers;

use App\Client;
use Illuminate\Http\Request;
use App\Http\Requests\ClientUpdate;
use App\Http\Requests\ClientStore;
use File;
class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $Client=Client::paginate(20);
      return view('admin.ClientAll',compact('Client'));
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
    public function store(ClientStore $request)
    {
      if (  Client::create($request->all())) {

        return redirect()->route('Client')->with('success','Client  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','Client Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
      if ($client) {
        return view('admin.ClientEdit',compact('client'));
      }else {
          return redirect()->route('404')->with('failed','Client Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(ClientUpdate $request, Client $client)
    {
        if ( $client->update($request->all())) {

          return redirect()->route('Client')->with('success','Client Info Updaed successflly');
        } else {
          return redirect()->back()->with('failed','Client Info Updaed Failed');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        $filename=$client->image;

        if ($client) {
            $client->delete();
             File::delete(public_path($filename));

            return redirect()->route('Client')->with('success', 'Client Info has been deleted Successfully');
        }else {
            return redirect()->back()->with('failed','Client Info Deleted Failed');
        }
    }
}
