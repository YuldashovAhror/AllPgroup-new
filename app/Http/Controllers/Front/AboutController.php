<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AboutMetateg;
use App\Models\AboutPhoto;
use App\Models\Parknyor;
use App\Models\Postavchik;
use App\Models\Service;
use App\Models\Storie;
use App\Models\Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Storie::orderBy('id')->get();
        $teams = Team::orderBy('id', 'desc')->get();
        $parknyors = Parknyor::orderBy('id', 'desc')->get();
        $postavchiks = Postavchik::orderBy('id', 'desc')->get();
        $metateg = AboutMetateg::find(1);
        $aboutphoto = AboutPhoto::find(1);
        $services = Service::orderBy('id', 'asc')->get();
        return view('front.about', [
            'stories'=>$stories,
            'teams'=>$teams,
            'metateg'=>$metateg,
            'services'=>$services,
            'parknyors'=>$parknyors,
            'aboutphoto'=>$aboutphoto,
            'postavchiks'=>$postavchiks,
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
