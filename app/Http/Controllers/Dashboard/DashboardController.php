<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Category;
use App\Models\Feedback;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends BaseController
{
    public function index()
    {
        $products = Project::all();
        $services = Service::all();
        $view_count = 0;
        foreach($products as $product){
            $view_count += $product->view;
        }
        $view_service = 0;
        foreach($services as $service){
            $view_service += $service->view;
        }
        $category = Category::all();
        $fedback = Feedback::all();
        return view('dashboard.dashboard', [
            'project_view_count'=>$view_count,
            'service_view_count'=>$view_service,
            'products'=>$products,
            'category'=>$category,
            'fedback'=>$fedback,
        ]);
    }
}
