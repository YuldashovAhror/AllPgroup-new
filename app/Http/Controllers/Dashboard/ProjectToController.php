<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTo;
use Illuminate\Http\Request;

class ProjectToController extends BaseController
{
    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        $projecttos = ProjectTo::orderBy('id', 'desc')->get();
        return view('dashboard.project_to.crud', [
            'projecttos'=>$projecttos,
            'projects'=>$projects,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'project' => 'integer',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);

        $projecttos = new ProjectTo();
        if(!empty($validatedData['photo'])){
            $projecttos['photo'] = $this->photoSave($validatedData['photo'], 'image/projecttos');
        }
        $projecttos->project_id = $validatedData['project'];
        $projecttos->discription_uz = $validatedData['discription_uz'];
        $projecttos->discription_ru = $validatedData['discription_ru'];
        $projecttos->discription_en = $validatedData['discription_en'];
        $projecttos->alt_uz = $request['alt_uz'];
        $projecttos->alt_ru = $request['alt_ru'];
        $projecttos->alt_en = $request['alt_en'];
        $projecttos->title_uz = $request['title_uz'];
        $projecttos->title_ru = $request['title_ru'];
        $projecttos->title_en = $request['title_en'];
        $projecttos->save();
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'project' => 'integer',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
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
        $projecttos->alt_uz = $request['alt_uz'];
        $projecttos->alt_ru = $request['alt_ru'];
        $projecttos->alt_en = $request['alt_en'];
        $projecttos->title_uz = $request['title_uz'];
        $projecttos->title_ru = $request['title_ru'];
        $projecttos->title_en = $request['title_en'];
        $projecttos->save();
        return back()->with('success', 'Data updated successfully.');
    }

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
