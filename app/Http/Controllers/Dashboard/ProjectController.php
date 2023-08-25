<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
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
        $projects = Project::with('categories')->orderBy('id', 'asc')->get();
        return view('dashboard.project.index', [
            'projects'=>$projects
        ]);
    }

    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->get();
        return view('dashboard.project.create', [
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'second_photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'category_id' => 'required|string|',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'keyword_uz' => 'nullable',
            'keyword_ru' => 'nullable',
            'keyword_en' => 'nullable',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
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

    public function edit($id)
    {
        $categories = Category::orderBy('id', 'desc')->get();
        $project = Project::find($id);
        return view('dashboard.project.edit', [
            'project'=>$project,
            'categories'=>$categories,
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'second_photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'category_id' => 'required|string|',
            'keyword_uz' => 'nullable',
            'keyword_ru' => 'nullable',
            'keyword_en' => 'nullable',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
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
        return redirect()->route('dashboard.project.index')->with('success', 'Data updated successfully.');
    }

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
