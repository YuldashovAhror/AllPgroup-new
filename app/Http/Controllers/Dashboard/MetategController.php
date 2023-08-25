<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\AboutMetateg;
use App\Models\ContactMetateg;
use App\Models\HomeMetateg;
use App\Models\NewsMetateg;
use App\Models\ProjectMetateg;
use App\Models\ServiceMetateg;
use Illuminate\Http\Request;

class MetategController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homemeta = HomeMetateg::find(1);
        $aboutmeta = AboutMetateg::find(1);
        $servicemeta = ServiceMetateg::find(1);
        $projectmeta = ProjectMetateg::find(1);
        $newsmeta = NewsMetateg::find(1);
        $contactmeta = ContactMetateg::find(1);
        return view('dashboard.metateg.index', [
            'homemeta'=>$homemeta,
            'aboutmeta'=>$aboutmeta,
            'servicemeta'=>$servicemeta,
            'projectmeta'=>$projectmeta,
            'newsmeta'=>$newsmeta,
            'contactmeta'=>$contactmeta,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function aboute(Request $request, $id)
    {
        // dd($request->all());
        $request = $request->toArray();
        if (!empty($request['photo'])){
            $this->fileDelete('\AboutMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/aboutmetateg');
        }
        AboutMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function service(Request $request,$id)
    {
        $request = $request->toArray();
        if (!empty($request['photo'])){
            $this->fileDelete('\ServiceMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/servicemetateg');
        }
        ServiceMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function project(Request $request,$id)
    {
        $request = $request->toArray();
        if (!empty($request['photo'])){
            $this->fileDelete('\ProjectMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/projectmetateg');
        }
        ProjectMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function news(Request $request,$id)
    {
        $request = $request->toArray();
        if (!empty($request['photo'])){
            $this->fileDelete('\NewsMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/newsmetateg');
        }
        NewsMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
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
        // dd($request->all());
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $this->fileDelete('\HomeMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/homemetateg');
        }
        HomeMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function contact(Request $request, $id)
    {
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $this->fileDelete('\ContactMetateg', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/contactmetateg');
        }
        ContactMetateg::find($id)->update($request);
        return back()->with('success', 'Data updated successfully.');
    }
}
