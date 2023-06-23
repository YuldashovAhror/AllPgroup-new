<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\ProjectTo;
use Illuminate\Http\Request;

class ProjectController extends BaseController
{
    private $projectController;
    public function __construct(ProjectToController $projectController)
    {
        $this->projectController = $projectController;
    }

    public function index()
    {
        $projects = Project::orderBy('id', 'desc')->get();
        return view('dashboard.project.index', [
            'projects'=>$projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.project.create');
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
            'second_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/project');   
        }
        if (!empty($validatedData['second_photo'])){
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/project');
        }
        
        Project::create($validatedData);
        return redirect()->route('dashboard.project.index')->with('success', 'Data uploaded successfully.');
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
        $project = Project::find($id);
        return view('dashboard.project.edit', [
            'project'=>$project
        ]);
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
            'second_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\Project', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/project');
        }
        if (!empty($validatedData['second_photo'])){
            $this->fileDelete('\Project', $id, 'second_photo');
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/project');
        }
        
        Project::find($id)->update($validatedData);
        return redirect()->route('dashboard.project.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->fileDelete('\Project', $id, 'photo');
        $this->fileDelete('\Project', $id, 'second_photo');
        foreach (ProjectTo::where('project_id', $id)->get() as $prod){
            $this->projectController->destroy($prod->id);
        }

        Project::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
