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
        
        $news = News::with('newcategories')->orderBy('id', 'asc')->get();
        return view('dashboard.news.index', [
            'news'=>$news,
        ]);
    }

    public function create()
    {
        $categories = NewCategory::orderBy('id', 'desc')->get();
        return view('dashboard.news.create', [
            'categories'=>$categories
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'second_photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'newcategory_id' => 'integer',
            'youtube' => 'nullable',
            'date' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);

        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/news');
        }
        if (!empty($validatedData['second_photo'])){
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/news');
        }
        // if(!empty($validatedData['second_photo'])){
        //     $this->fileDelete('\News', $id, 'second_photo');
        //     $news['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/news');
        // }
        News::create($validatedData);
        return redirect()->route('dashboard.news.index')->with('success', 'Data updated successfully.');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $categories = NewCategory::orderBy('id', 'desc')->get();
        $new = News::find($id);
        return view('dashboard.news.edit', [
            'new'=>$new,
            'categories'=>$categories,
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'second_photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'newcategory' => 'integer',
            'youtube' => 'nullable',
            'date' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\News', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/news');
        }
        if (!empty($validatedData['second_photo'])){
            $this->fileDelete('\News', $id, 'second_photo');
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/news');
        }
        News::find($id)->update($validatedData);
        return redirect()->route('dashboard.news.index')->with('success', 'Data updated successfully.');

    }

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
