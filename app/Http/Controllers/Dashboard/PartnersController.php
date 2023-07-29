<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Partners;
use Illuminate\Http\Request;

class PartnersController extends Controller
{
    public function index()
    {
        $partners = Partners::orderBy('id', 'desc')->get();
        return view('dashboard.partner.crud', [
            'partners'=>$partners
        ]);
    }

    public function store(Request $request)
    {
        Partners::create($request->all());
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        Partners::find($id)->update($request->all());
        return back()->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Partners::find($id)->delete();
        return back()->with('success', 'Data deleted .');
    }
}
