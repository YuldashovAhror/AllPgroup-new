<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Postavchik;
use Illuminate\Http\Request;

class PostavchikController extends BaseController
{
    public function index()
    {
        $postavchiks = Postavchik::orderBy('id', 'desc')->get();
        return view('dashboard.postavchik.crud', [
            'postavchiks'=>$postavchiks
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'link' => 'required|string|max:255',
            'discription_uz' => 'required',
            'discription_ru' => 'required',
            'discription_en' => 'required',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/postavchik');   
        }
        Postavchik::create($validatedData);
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif,webp|max:20480',
            'link' => 'required|string|max:255',
            'discription_uz' => 'required',
            'discription_ru' => 'required',
            'discription_en' => 'required',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\Postavchik', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/postavchik');   
        }
        Postavchik::find($id)->update($validatedData);
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Postavchik', $id, 'photo');
        Postavchik::find($id)->delete();
        return back();
    }
}
