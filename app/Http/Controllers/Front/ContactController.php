<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Client;
use App\Models\ContactMetateg;
use App\Models\Feedback;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clients = Client::orderBy('id', 'desc')->get();
        $vacancies = Vacancy::orderBy('id', 'desc')->get();
        $metateg = ContactMetateg::find(1);
        return view('front.contact', [
            'clients'=>$clients,
            'vacancies'=>$vacancies,
            'metateg'=>$metateg,
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
        // dd($request->all());
        $feedback = new Feedback();
        if (!empty($request->file('photo'))) {
            $img_name = Str::random(10) . '.' . $request->file('photo')->getClientOriginalExtension();
            $request->file('photo')->move(public_path('/image/feedback'), $img_name);
            $feedback->photo = '/image/feedback/' . $img_name;
        }

        $feedback->name = $request->name;
        $feedback->client_id = $request->client_id;
        $feedback->phone = $request->phone;
        $feedback->discription = $request->discription;
        $feedback->vacancy_number = $request->vacancy_number;
        $feedback->save();
        return back()->with(['message' => 'success']);
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
