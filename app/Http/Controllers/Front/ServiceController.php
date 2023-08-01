<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Section;
use App\Models\Service;
use App\Models\ServiceMetateg;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::orderBy('id', 'desc')->get();
        $metateg = ServiceMetateg::find(1);
        return view('front.service.services', [
            'services'=>$services,
            'metateg'=>$metateg,
        ]);
    }

    public function show($id)
    {
        $services = Service::with('sections')->orderBy('id', 'desc')->get();
        $serviceess = Service::find($id);
        $serviceess->increment('view');
        $sections = Section::with('items')->where('service_id', $serviceess->id)->get();
        return view('front.service.services', [
            'serviceess'=>$serviceess,
            'sections'=>$sections,
            'services'=>$services,
        ]);
    }
}
