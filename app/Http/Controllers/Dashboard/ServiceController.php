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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.service.create');
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
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/service');   
        }
        if (!empty($validatedData['second_photo'])){
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/service');
        }
        
        Service::create($validatedData);
        return redirect()->route('dashboard.Service.index')->with('success', 'Data uploaded successfully.');
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
        $service = Service::find($id);
        return view('dashboard.service.edit', [
            'service'=>$service
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
        $validatedData = $request->validate([
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'second_photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'title_uz' => 'nullable',
            'title_ru' => 'nullable',
            'title_en' => 'nullable',
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
        ]);
        
        if (!empty($validatedData['photo'])){
            $this->fileDelete('\Service', $id, 'photo');
            $validatedData['photo'] = $this->photoSave($validatedData['photo'], 'image/service');
        }
        if (!empty($validatedData['second_photo'])){
            $this->fileDelete('\Service', $id, 'second_photo');
            $validatedData['second_photo'] = $this->photoSave($validatedData['second_photo'], 'image/service');
        }
        
        Service::find($id)->update($validatedData);
        return redirect()->route('dashboard.Service.index')->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->fileDelete('\Service', $id, 'photo');
        $this->fileDelete('\Service', $id, 'second_photo');

        foreach (ServiceTo::where('service_id', $id)->get() as $prod){
            $this->serviceController->destroy($prod->id);
        }
        Service::find($id)->delete();
        return back()->with('success', 'Data uploaded successfully.')->with('success', 'Data deleted.');
    }
}
