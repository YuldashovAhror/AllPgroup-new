<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\EmailFile;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class EmailFileController extends Controller
{
    public function index()
    {
        $emailfile = EmailFile::find(1);
        return view('dashboard.emailfile.crud', [
            'emailfile'=>$emailfile
        ]);
    }

    public function update(Request $request, $id)
    {
        $emailfile = EmailFile::find($id);
        $request = $request->toArray();
        if (!empty($request['photo'])) {
            if (is_file(public_path($emailfile->photo))) {
                unlink(public_path($emailfile->photo));
            }
            $img_name = Str::random(10) . '.' . $request['photo']->getClientOriginalExtension();
            $request['photo']->move(public_path('/image/emailfile'), $img_name);
            $emailfile->photo = '/image/emailfile/' . $img_name;
        }
        $emailfile->save();
        return back()->with('success', 'Data updated successfully.');
    }
}
