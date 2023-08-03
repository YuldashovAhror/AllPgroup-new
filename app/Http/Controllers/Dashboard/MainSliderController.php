<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\MainSlider;
use Illuminate\Http\Request;

class MainSliderController extends BaseController
{
    public function index()
    {
        $mainsliders = MainSlider::orderBy('id', 'desc')->get();
        return view('dashboard.mainslider.crud', [
            'mainsliders'=>$mainsliders
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'link' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/mainslider');
        }
        MainSlider::create($validatedData);
        return redirect()->route('dashboard.mainslider.index')->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'link' => 'nullable',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\MainSlider', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/mainslider');
        }
        MainSlider::find($id)->update($validatedData);
        return back()->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\MainSlider', $id, 'photo');
        MainSlider::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
