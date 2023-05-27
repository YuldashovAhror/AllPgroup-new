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
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $request['photo'] = $this->photoSave($request['photo'], 'image/service');   
        }
        if (!empty($request['second_photo'])){
            $request['second_photo'] = $this->photoSave($request['second_photo'], 'image/service');
        }
        
        Service::create($request);
        return redirect()->route('dashboard.Service.index');
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
        $request = $request->toArray();
        
        if (!empty($request['photo'])){
            $this->fileDelete('\Service', $id, 'photo');
            $request['photo'] = $this->photoSave($request['photo'], 'image/service');
        }
        if (!empty($request['second_photo'])){
            $this->fileDelete('\Service', $id, 'second_photo');
            $request['second_photo'] = $this->photoSave($request['second_photo'], 'image/service');
        }
        
        Service::find($id)->update($request);
        return redirect()->route('dashboard.Service.index');
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
        return back();
    }
}
