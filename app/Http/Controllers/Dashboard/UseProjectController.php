<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\UserProject;
use Illuminate\Http\Request;

class UseProjectController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $useprojects = UserProject::orderBy('id', 'desc')->get();
        return view('dashboard.useproject.crud', [
            'useprojects'=>$useprojects
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
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $request['photo'] = $this->photoSave($request['photo'], 'image/useproject');
        }
        UserProject::create($request);
        return redirect()->route('dashboard.useproject.index');
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
        $request = $request->toArray();
        if (!empty($request['photo'])){
            $this->fileDelete('\UserProject', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/useproject');
        }
        UserProject::find($id)->update($request);
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
        $this->fileDelete('\UserProject', $id, 'photo');
        UserProject::find($id)->delete();
        return back();
    }
}
