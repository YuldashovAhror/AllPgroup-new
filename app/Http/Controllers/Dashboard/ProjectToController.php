<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTo;
use Illuminate\Http\Request;

class ProjectToController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        $projecttos = ProjectTo::orderBy('id', 'desc')->get();
        return view('dashboard.project_to.crud', [
            'projecttos'=>$projecttos,
            'projects'=>$projects,
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
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'project' => 'integer',
        ]);

        $projecttos = new ProjectTo();
        if(!empty($validatedData['photo'])){
            $projecttos['photo'] = $this->photoSave($validatedData['photo'], 'image/projecttos');
        }
        $projecttos->project_id = $validatedData['project'];
        $projecttos->discription_uz = $validatedData['discription_uz'];
        $projecttos->discription_ru = $validatedData['discription_ru'];
        $projecttos->discription_en = $validatedData['discription_en'];
        $projecttos->save();
        return back()->with('success', 'Data uploaded successfully.');
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
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'project' => 'integer',
        ]);
        $projecttos = ProjectTo::find($id);
        if(!empty($validatedData['photo'])){
            if(is_file(public_path($projecttos->photo))){
                unlink(public_path($projecttos->photo));
            }
            $projecttos['photo'] = $this->photoSave($validatedData['photo'], 'image/projecttos');
        }
        $projecttos->project_id = $validatedData['project'];
        $projecttos->discription_uz = $validatedData['discription_uz'];
        $projecttos->discription_ru = $validatedData['discription_ru'];
        $projecttos->discription_en = $validatedData['discription_en'];
        $projecttos->save();
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $projecttos = ProjectTo::find($id);
        if(is_file(public_path($projecttos->photo))){
            unlink(public_path($projecttos->photo));
        }
        $projecttos->delete();
        return back()->with('success', 'Data deleted.');
    }
}
