<?php

namespace App\Http\Controllers;

use App\Contact;
use Brian2694\Toastr\Toastr;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function mail(Request $request)
    {
        $mail = new \App\Contact();
        $mail->name = $request->input('name');
        $mail->email = $request->input('email');
        $mail->phone = $request->input('phone');
        $mail->message = $request->input('message');
        $mail->save();

        $mail = array('name' => "$request->name", 'messages' => "$request->message", 'phone' => "$request->phone");
        Mail::send('user.mail', $mail, function ($message) use ($mail, $request) {
            $message->to('decryptorlucifer@gmail.com', $request->name)->subject
            ($request->message, $request->name);
            $message->from($request->email);
        });
        echo "Basic Email Sent. Check your inbox.";
        \Brian2694\Toastr\Facades\Toastr::success('Data Submitted Successfully', 'success');
        return back();

    }
}
