<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\File;
use Illuminate\Http\Request;

class FileController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = File::orderBy('id', 'desc')->get();
        return view('dashboard.file.crud', [
            'files'=>$files
        ]);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        $file = new File();
        if(!empty($validatedData['photo'])){
            $file['photo'] = $this->photoSave($validatedData['photo'], 'image/file');
        }
        $file->save();
        return back()->with('success', 'Data uploaded successfully.')->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
        ]);

        $file = File::find($id);
        if(!empty($validatedData['photo'])){
            if(is_file(public_path($file->photo))){
                unlink(public_path($file->photo));
            }
            $file['photo'] = $this->photoSave($validatedData['photo'], 'image/file');
        }
        $file->save();
        return back()->with('success', 'Data uploaded successfully.')->with('success', 'Data uploaded successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\File', $id, 'photo');
        File::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
