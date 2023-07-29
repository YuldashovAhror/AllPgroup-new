<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancyController extends Controller
{
    public function index()
    {
        $vacancies = Vacancy::orderBy('id', 'asc')->get();
        return view('dashboard.vacancy.crud', [
            'vacancies'=>$vacancies
        ]);
    }

    public function store(Request $request)
    {
        Vacancy::create($request->all());
        return redirect()->route('dashboard.vacancy.index')->with('success', 'Data uploaded successfully.');
    }

    public function update(Request $request, $id)
    {
        Vacancy::find($id)->update($request->all());
        return back()->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Vacancy::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
