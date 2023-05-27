<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NewCategory;
use App\Models\News;
use Illuminate\Http\Request;

class NewCategoryController extends Controller
{
    private $newsController;
    public function __construct(NewsController $newsController)
    {
        $this->newsController = $newsController;
    }

    public function index()
    {
        $categories = NewCategory::orderBy('id', 'desc')->get();
        return view('dashboard.newscategory.crud', [
            'categories'=>$categories
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
        $request = $request->toArray(); 
        NewCategory::create($request);
        return back();
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
        $request = $request->toArray();
        NewCategory::find($id)->update($request);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        NewCategory::find($id)->delete();

        foreach (News::where('newcategory_id', $id)->get() as $prod){
            $this->newsController->destroy($prod->id);
        }
        return back();
    }
}
