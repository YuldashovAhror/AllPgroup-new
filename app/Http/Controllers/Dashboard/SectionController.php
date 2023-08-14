<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Section;
use Illuminate\Http\Request;

class SectionController extends Controller
{
    public function index($id)
    {
        $sections = Section::where('service_id', $id)->get();
        return view('dashboard.section.crud', [
            'sections'=>$sections,
            'service_id'=>$id,
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'required',
            'discription_ru' => 'required',
            'discription_en' => 'required',
            'service_id' => 'integer',
            'ok' => 'nullable',
        ]);

        $section = new Section();
        if (!empty($validatedData['ok'])){
            $validatedData['ok'] = 1;
        }
        if (empty($validatedData['ok'])){
            $validatedData['ok'] = 0;
        }
        $section->service_id = $validatedData['service_id'];
        $section->discription_uz = $validatedData['discription_uz'];
        $section->discription_ru = $validatedData['discription_ru'];
        $section->discription_en = $validatedData['discription_en'];
        $section->name_uz = $validatedData['name_uz'];
        $section->name_ru = $validatedData['name_ru'];
        $section->name_en = $validatedData['name_en'];
        $section->ok = $validatedData['ok'];
        $section->save();
        return back()->with('success', 'Data uploaded successfully.');
    }

    public function edit($id)
    {
        $section = Section::find($id);
        // $service_id = $section->service_id;
        // $section->service_id = 'service_id';
        return view('dashboard.section.edit', [
            'section'=>$section
        ]);
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $validatedData = $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'required',
            'discription_ru' => 'required',
            'discription_en' => 'required',
            'ok' => 'nullable',
        ]);

        $section = Section::find($id);
        if (!empty($validatedData['ok'])){
            $validatedData['ok'] = 1;
        }
        if (empty($validatedData['ok'])){
            $validatedData['ok'] = 0;
        }
        $section->discription_uz = $validatedData['discription_uz'];
        $section->discription_ru = $validatedData['discription_ru'];
        $section->discription_en = $validatedData['discription_en'];
        $section->name_uz = $validatedData['name_uz'];
        $section->name_ru = $validatedData['name_ru'];
        $section->name_en = $validatedData['name_en'];
        $section->ok = $validatedData['ok'];
        $section->save();
        // dd($section->service_id);
        return redirect()->route('dashboard.section.index', $section->service_id)->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Section::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
