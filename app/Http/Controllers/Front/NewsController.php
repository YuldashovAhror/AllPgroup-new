<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use App\Models\NewsMetateg;
use App\Models\Service;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $newcategories = NewCategory::with('news')->orderBy('id', 'desc')->get();
        $metateg = NewsMetateg::find(1);
        $services = Service::orderBy('id', 'asc')->get();
        return view('front.news.news', [
            'newcategories'=>$newcategories,
            'metateg'=>$metateg,
            'services'=>$services,
        ]);
    }

    public function show($id)
    {
        $metateg = NewsMetateg::find(1);
        $news = News::with('newtos')->orderBy('id', 'desc')->paginate(3);
        $new = News::find($id);
        return view('front.news.single', [
            'new'=>$new,
            'news'=>$news,
            'metateg'=>$metateg,
        ]);
    }
}
