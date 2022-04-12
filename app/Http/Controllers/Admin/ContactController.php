<?php

namespace App\Http\Controllers\Admin;

use App\Contact;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function contactList()
    {
        $contact = Contact::all();
        return view('admin.contact.contactlist', compact('contact'));

    }

    public function contactDelete($id)
    {
        $contact = Contact::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }


}
