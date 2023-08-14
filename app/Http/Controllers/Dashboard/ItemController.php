<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index($id)
    {
        $items = Item::where('section_id', $id)->get();
        return view('dashboard.item.crud', [
            'items'=>$items,
            'section_id'=>$id,
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
            'section_id' => 'integer',
            'ok' => 'nullable',
        ]);

        $section = new Item();
        if (!empty($validatedData['ok'])){
            $validatedData['ok'] = 1;
        }
        if (empty($validatedData['ok'])){
            $validatedData['ok'] = 0;
        }
        $section->section_id = $validatedData['section_id'];
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
        $item = Item::find($id);
        return view('dashboard.item.edit', [
            'item'=>$item
        ]);
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name_uz' => 'required|string|max:255',
            'name_ru' => 'required|string|max:255',
            'name_en' => 'required|string|max:255',
            'discription_uz' => 'required',
            'discription_ru' => 'required',
            'discription_en' => 'required',
            'ok' => 'nullable',
        ]);

        $section = Item::find($id);
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
        return redirect()->route('dashboard.item.index', $section->section_id)->with('success', 'Data updated successfully.');
    }

    public function destroy($id)
    {
        Item::find($id)->delete();
        return back()->with('success', 'Data deleted.');
    }
}
