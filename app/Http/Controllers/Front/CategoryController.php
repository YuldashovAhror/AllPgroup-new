<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectMetateg;
use App\Models\Service;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show($id)
    {
        $select_category = Category::with('projects')->find($id);
        $projects = $select_category->projects;
        $categories = Category::orderBy('id', 'asc')->get();
        $metateg = ProjectMetateg::find(1);
        $services = Service::orderBy('id', 'asc')->get();
        // $project = Project::where('category_id', $id)->get();
        return view('front.project.projects', [
            // 'project'=>$project,
            'projects' => $projects,
            'metateg' => $metateg,
            'services' => $services,
            'categories' => $categories,
            'select_category' => $select_category->id
        ]);
    }

    public function edit($id)
    {
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
