<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Mail\SendFileEmail;
use App\Models\EmailFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function store(Request $request)
    {
        $filepath = EmailFile::find(1)->photo;
        $content = '';
        $to_email = $request->email_name;
        Mail::send('mail.letter', ['messages' => $content], function($message) use ($filepath, $to_email){
            $message->from('info@all-p.uz', 'All-p');
            $message->to($to_email, 'ART-GAS to')->subject('All-P')->attach(public_path($filepath));
        });
        return back();
    }
    // 'muradbuildings.kislorod@gmail.com'
}
