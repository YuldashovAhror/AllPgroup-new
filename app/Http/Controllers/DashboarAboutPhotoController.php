<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Dashboard\BaseController;
use App\Models\AboutPhoto;
use Illuminate\Http\Request;

class DashboarAboutPhotoController extends BaseController
{
    public function index()
    {
        $aboutphoto = AboutPhoto::find(1);
        return view('dashboard.aboutphoto.index', [
            'aboutphoto'=>$aboutphoto
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            'alt_uz' => 'nullable',
            'alt_ru' => 'nullable',
            'alt_en' => 'nullable',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\AboutPhoto', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/aboutphoto');   
        }
        AboutPhoto::find($id)->update($validatedData);
        return back()->with('success', 'Data uploaded successfully.');
    }
}
