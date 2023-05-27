<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use App\Models\NewsTo;
use Illuminate\Http\Request;

class NewsController extends BaseController
{
    private $newstotController;
    public function __construct(NewsToController $newstotController)
    {
        $this->newstotController = $newstotController;
    }

    public function index()
    {
        
        $news = News::with('newcategories')->orderBy('id', 'desc')->get();
        return view('dashboard.news.index', [
            'news'=>$news,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = NewCategory::orderBy('id', 'desc')->get();
        return view('dashboard.news.create', [
            'categories'=>$categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $news = new News();
        if($request->file('photo')){
            $news['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        if($request->file('second_photo')){
            $news['second_photo'] = $this->photoSave($request->file('second_photo'), 'image/news');
        }
        $news->newcategory_id = $request->newcategory;
        $news->name_uz = $request->name_uz;
        $news->name_ru = $request->name_ru;
        $news->name_en = $request->name_en;
        $news->discription_uz = $request->discription_uz;
        $news->discription_ru = $request->discription_ru;
        $news->discription_en = $request->discription_en;
        $news->date = $request->date;
        $news->youtube = $request->youtube;
        $news->save();
        return redirect()->route('dashboard.news.index');
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
        $categories = NewCategory::orderBy('id', 'desc')->get();
        $new = News::find($id);
        return view('dashboard.news.edit', [
            'new'=>$new,
            'categories'=>$categories,
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
        $new = News::find($id);
        if($request->file('photo')){
            $this->fileDelete('\News', $id, 'photo');
            $new['photo'] = $this->photoSave($request->file('photo'), 'image/news');
        }
        if($request->file('second_photo')){
            $this->fileDelete('\News', $id, 'second_photo');
            $new['second_photo'] = $this->photoSave($request->file('second_photo'), 'image/news');
        }
        $new->newcategory_id = $request->newcategory;
        $new->name_uz = $request->name_uz;
        $new->name_ru = $request->name_ru;
        $new->name_en = $request->name_en;
        $new->discription_uz = $request->discription_uz;
        $new->discription_ru = $request->discription_ru;
        $new->discription_en = $request->discription_en;
        $new->date = $request->date;
        $new->youtube = $request->youtube;
        $new->save();
        return redirect()->route('dashboard.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $new = News::find($id);
        if(is_file(public_path($new->photo))){
            unlink(public_path($new->photo));
        }
        if(is_file(public_path($new->second_photo))){
            unlink(public_path($new->second_photo));
        }
        foreach (NewsTo::where('news_id', $id)->get() as $prod){
            $this->newstotController->destroy($prod->id);
        }
        $new->delete();
        return back();
    }
}
