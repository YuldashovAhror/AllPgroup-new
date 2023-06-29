<?php

namespace App\Http\Controllers\Front;

use App\Models\Comment;
use App\Models\HomeMetateg;
use App\Models\MainSlider;
use App\Models\NewCategory;
use App\Models\News;
use App\Models\Project;
use App\Models\Service;
use App\Models\UserProject;

class FrontController
{
    public function index()
    {
        // if (session()->get('locale') == '') {
        //     session()->put('locale', 'ru');
        //     app()->setLocale('ru');
        // } else {
        //     app()->setLocale(session()->get('locale'));
        // }
        // $lang = session()->get('locale');
        $useprojects = UserProject::orderBy('id', 'asc')->get();
        $newcategories = NewCategory::with('news')->orderBy('id', 'desc')->get();
        $comments = Comment::orderBy('id', 'asc')->get();
        $projects = Project::orderBy('id', 'asc')->get();
        $mainsliders = MainSlider::orderBy('id', 'asc')->get();
        $services = Service::orderBy('id', 'asc')->get();
        $metateg = HomeMetateg::find(1);
        return view('front.welcome', [
            'mainsliders'=>$mainsliders,
            'services'=>$services,
            'useprojects'=>$useprojects,
            'projects'=>$projects,
            'comments'=>$comments,
            'newcategories'=>$newcategories,
            'metateg'=>$metateg,
        ]);
    }
}
