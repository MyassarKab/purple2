<?php

namespace App\Http\Controllers;

use App\News;
use Illuminate\Http\Request;
use App\Http\Requests\NewsStore;
use App\Http\Requests\NewsUpdate;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $News=News::paginate(15);
      return view('admin.NewsAll',compact('News'));
    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonIndex()
    {
        $News=News::paginate(15);
        return response()->json(['success'=>true,'data'=>$News,'message'=>'']);

    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonLast()
    {
        $News=News::orderBy('created_at', 'DESC')->limit(3)->get();
         return response()->json(['success'=>true,'data'=>$News,'message'=>'']);

    }
    /**
     * Display a listing of the resource Json for api.
     *
     * @return \Illuminate\Http\Response
     */
    public function JsonShow($news)
    {
        $News=News::where('title_en',$news)->first();
         return response()->json(['success'=>true,'data'=>$News,'message'=>'']);

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.NewsAdd');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStore $request)
    {
      if (  News::create($request->all())) {

        return redirect()->route('News')->with('success','News  Info Addes successflly');
      } else {
        return redirect()->back()->with('failed','News Info Added Failed');
      }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function show($news)
    {
        $News=News::where('slug','like',$news)->first();
        return view('article',compact('News'));
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function showAll()
    {
          $News=News::orderBy('created_at','DESC')->paginate(6);
          return view('News',compact('News'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
      if ($news) {
        return view('admin.NewsEdit',compact('news'));
      }else {
          return redirect()->route('404')->with('failed','News Info Not Found');
      }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdate $request, News $news)
    {
      if ( $news->update($request->all())) {

        return redirect()->route('News')->with('success','News Info Updaed successflly');
      } else {
        return redirect()->back()->with('failed','News Info Updaed Failed');
      }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
      if ($news) {
          $news->delete();
          return redirect()->route('News')->with('success', 'News Info has been deleted Successfully');
      }else {
          return redirect()->back()->with('failed','News Info Deleted Failed');
      }
    }
}
