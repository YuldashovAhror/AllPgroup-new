<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class FeedbackController extends BaseController
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('id', 'desc')->get();
        return view('dashboard.feedback.index', [
            'feedbacks'=>$feedbacks
        ]);
    }

    public function destroy($id)
    {
        $this->fileDelete('\Feedback', $id, 'photo');
        Feedback::find($id)->delete();
        return redirect()->back()->with('success', 'Data deleted.');
    }
}
