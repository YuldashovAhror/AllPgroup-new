<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTo;
use Illuminate\Http\Request;

class NewsToController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        $newstos = NewsTo::with('news')->orderBy('id', 'desc')->get();
        return view('dashboard.news_to.crud', [
            'news'=>$news,
            'newstos'=>$newstos,
        ]);
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
    public function store(Request $request)
    {
        $newstos = new NewsTo();
        if($request->file('photo')){
            $newstos['photo'] = $this->photoSave($request->file('photo'), 'image/newsto');
        }
        $newstos->news_id = $request->news;
        $newstos->discription_uz = $request->discription_uz;
        $newstos->discription_ru = $request->discription_ru;
        $newstos->discription_en = $request->discription_en;
        $newstos->save();
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $newstos = NewsTo::find($id);
        if($request->file('photo')){
            if(is_file(public_path($newstos->photo))){
                unlink(public_path($newstos->photo));
            }
            $newstos['photo'] = $this->photoSave($request->file('photo'), 'image/newsto');
        }
        $newstos->news_id = $request->news;
        $newstos->discription_uz = $request->discription_uz;
        $newstos->discription_ru = $request->discription_ru;
        $newstos->discription_en = $request->discription_en;
        $newstos->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $newstos = NewsTo::find($id);
        if(is_file(public_path($newstos->photo))){
            unlink(public_path($newstos->photo));
        }
        $newstos->delete();
        return back();
    }
}
