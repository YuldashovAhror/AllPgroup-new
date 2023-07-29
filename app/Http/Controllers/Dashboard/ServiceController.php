<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceTo;
use Illuminate\Http\Request;

class ServiceController extends BaseController
{
    private $serviceController;
    public function __construct(ServiceToController $serviceController)
    {
        $this->serviceController = $serviceController;
    }

    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        return view('dashboard.service.index', [
            'services'=>$services
        ]);
    }
    public function create()
    {
        return view('dashboard.service.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/service');   
        }
        Service::create($validatedData);
        return redirect()->route('dashboard.Service.index')->with('success', 'Data uploaded successfully.');
    }

    public function edit($id)
    {
        $service = Service::find($id);
        return view('dashboard.service.edit', [
            'service'=>$service
        ]);
    }
    
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:20480',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\Service', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/service');
        }
        Service::find($id)->update($validatedData);
        return redirect()->route('dashboard.Service.index')->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        $this->fileDelete('\Service', $id, 'photo');
        Service::find($id)->delete();
        return back()->with('success', 'Data uploaded successfully.')->with('success', 'Data deleted.');
    }
}
