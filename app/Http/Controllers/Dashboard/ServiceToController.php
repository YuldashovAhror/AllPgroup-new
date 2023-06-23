<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceTo;
use Illuminate\Http\Request;

class ServiceToController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $servicetos = ServiceTo::orderBy('id', 'desc')->get();

        return view('dashboard.service_to.crud',[
            'services'=>$services,
            'servicetos'=>$servicetos,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'service' => 'integer',
        ]);

        $servicetos = new ServiceTo();
        if(!empty($validatedData['photo'])){
            $servicetos['photo'] = $this->photoSave($validatedData['photo'], 'image/servicetos');
        }
        $servicetos->service_id = $validatedData['service'];
        $servicetos->discription_uz = $validatedData['discription_uz'];
        $servicetos->discription_ru = $validatedData['discription_ru'];
        $servicetos->discription_en = $validatedData['discription_en'];
        $servicetos->save();
        return back()->with('success', 'Data uploaded successfully.')->with('success', 'Data uploaded successfully.');
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
        //
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
            'discription_uz' => 'nullable',
            'discription_ru' => 'nullable',
            'discription_en' => 'nullable',
            'service' => 'integer',
        ]);
        $servicetos = ServiceTo::find($id);
        if(!empty($validatedData['photo'])){
            if(is_file(public_path($servicetos->photo))){
                unlink(public_path($servicetos->photo));
            }
            $servicetos['photo'] = $this->photoSave($validatedData['photo'], 'image/servicetos');
        }   
        $servicetos->service_id = $validatedData['service'];
        $servicetos->discription_uz = $validatedData['discription_uz'];
        $servicetos->discription_ru = $validatedData['discription_ru'];
        $servicetos->discription_en = $validatedData['discription_en'];
        $servicetos->save();
        return back()->with('success', 'Data updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $servicetos = ServiceTo::find($id);
        if(is_file(public_path($servicetos->photo))){
            unlink(public_path($servicetos->photo));
        }
        $servicetos->delete();
        return back()->with('success', 'Data deleted.');
    }
}
