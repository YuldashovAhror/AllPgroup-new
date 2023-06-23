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
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'second_photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'newcategory' => 'integer',
            'youtube' => 'nullable',
            'date' => 'nullable',
        ]);

        $news = new News();
        if(!empty($validatedData['photo'])){
            $news['photo'] = $this->photoSave($validatedData['photo'], 'image/news');
        }
        if(!empty($validatedData['second_photo'])){
            $news['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/news');
        }
        $news->newcategory_id = $validatedData['newcategory'];
        $news->name_uz = $validatedData['name_uz'];
        $news->name_ru = $validatedData['name_ru'];
        $news->name_en = $validatedData['name_en'];
        $news->discription_uz = $validatedData['discription_uz'];
        $news->discription_ru = $validatedData['discription_ru'];
        $news->discription_en = $validatedData['discription_en'];
        $news->date = $validatedData['date'];
        $news->youtube = $validatedData['youtube'];
        $news->save();
        return redirect()->route('dashboard.news.index')->with('success', 'Data uploaded successfully.');
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
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'second_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'newcategory' => 'integer',
            'youtube' => 'nullable',
            'date' => 'nullable',
        ]);
        // dd($validatedData);
        $new = News::find($id);
        if(!empty($validatedData['photo'])){
            $this->fileDelete('\News', $id, 'photo');
            $news['photo'] = $this->photoSave($validatedData['photo'], 'image/news');
        }
        if(!empty($validatedData['second_photo'])){
            $this->fileDelete('\News', $id, 'second_photo');
            $news['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/news');
        }
        $new->newcategory_id = $validatedData['newcategory'];
        $new->name_uz = $validatedData['name_uz'];
        $new->name_ru = $validatedData['name_ru'];
        $new->name_en = $validatedData['name_en'];
        $new->discription_uz = $validatedData['discription_uz'];
        $new->discription_ru = $validatedData['discription_ru'];
        $new->discription_en = $validatedData['discription_en'];
        $new->date = $validatedData['date'];
        $new->youtube = $validatedData['youtube'];
        $new->save();
        return redirect()->route('dashboard.news.index')->with('success', 'Data updated successfully.');
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
        return back()->with('success', 'Data deleted.');
    }
}
