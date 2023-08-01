<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Project;
use App\Models\ProjectMetateg;
use App\Models\Service;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'asc')->get();
        $projects = Project::where('category_id', $categories->first()->id)->get();
        $metateg = ProjectMetateg::find(1);
        $services = Service::orderBy('id', 'asc')->get();
        return view('front.project.projects', [
            'projects'=>$projects,
            'metateg'=>$metateg,
            'services'=>$services,
            'categories'=>$categories,
        ]);
    }

    public function show($id)
    {
        $projects = Project::orderBy('id', 'desc')->paginate(3);
        $project = Project::find($id);
        $project->increment('view');
        return view('front.project.single', [
            'project'=>$project,
            'projects'=>$projects
        ]);
    }

}
