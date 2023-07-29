<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Parknyor;
use Illuminate\Http\Request;

class ParknyorController extends BaseController
{
    public function index()
    {
        $parknyors = Parknyor::orderBy('id', 'desc')->get();
        return view('dashboard.parknyor.crud', [
            'parknyors'=>$parknyors
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/parknyor');   
        }
        Parknyor::create($validatedData);
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\Parknyor', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/parknyor');   
        }
        Parknyor::find($id)->update($validatedData);
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Parknyor', $id, 'photo');
        Parknyor::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
