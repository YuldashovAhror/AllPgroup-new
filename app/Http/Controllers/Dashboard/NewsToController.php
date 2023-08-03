<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\News;
use App\Models\NewsTo;
use Illuminate\Http\Request;

class NewsToController extends BaseController
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->get();
        $newstos = NewsTo::with('news')->orderBy('id', 'desc')->get();
        return view('dashboard.news_to.crud', [
            'news'=>$news,
            'newstos'=>$newstos,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'news' => 'integer',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        $newstos = new NewsTo();
        if(!empty($validatedData['photo'])){
            $newstos['photo'] = $this->photoSave($validatedData['photo'], 'image/newsto');
        }
        $newstos->news_id = $request->news;
        $newstos->discription_uz = $request['discription_uz'];
        $newstos->discription_ru = $request['discription_ru'];
        $newstos->discription_en = $request['discription_en'];
        $newstos->alt_uz = $request['alt_uz'];
        $newstos->alt_ru = $request['alt_ru'];
        $newstos->alt_en = $request['alt_en'];
        $newstos->title_uz = $request['title_uz'];
        $newstos->title_ru = $request['title_ru'];
        $newstos->title_en = $request['title_en'];
        $newstos->save();
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {

        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'news' => 'integer',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);

        $newstos = NewsTo::find($id);

        if(!empty($validatedData['photo'])){
            if(is_file(public_path($newstos->photo))){
                unlink(public_path($newstos->photo));
            }
            $newstos['photo'] = $this->photoSave($validatedData['photo'], 'image/newsto');
        }
        $newstos->news_id = $validatedData['news'];
        $newstos->discription_uz = $request['discription_uz'];
        $newstos->discription_ru = $request['discription_ru'];
        $newstos->discription_en = $request['discription_en'];
        $newstos->alt_uz = $request['alt_uz'];
        $newstos->alt_ru = $request['alt_ru'];
        $newstos->alt_en = $request['alt_en'];
        $newstos->title_uz = $request['title_uz'];
        $newstos->title_ru = $request['title_ru'];
        $newstos->title_en = $request['title_en'];
        $newstos->save();
        return back()->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $newstos = NewsTo::find($id);
        if(is_file(public_path($newstos->photo))){
            unlink(public_path($newstos->photo));
        }
        $newstos->delete();
        return back()->with('success', 'Data deleted.');
    }
}
