<?php

namespace App\Http\Controllers;

use App\career;
use App\Contact;
use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function career()
    {

        return view('user.career');

    }

    public function cvUpload(Request $request)
    {

        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
            'firstname' => 'required',
            'lastname' => 'required',
            'dob' => 'required',
            'contactnumber' => 'required',
            'gender' => 'required',
            'nid' => 'required',
            'email' => 'required',
            'address' => 'required',
            'message' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|required|max:10000',


        ]);

        $career = new career();

        $career->firstname = $request->firstname;
        $career->lastname = $request->lastname;
        $career->dob = $request->dob;
        $career->contactnumber = $request->contactnumber;
        $career->gender = $request->gender;
        $career->nid = $request->nid;
        $career->email = $request->email;
        $career->position = $request->position;
        $career->address = $request->address;
        $career->message = $request->message;
        $career->file = $request->input('file');
        $career->image = $request->input('image');

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move(public_path('uploads'), $fileName);
            $career->file = $fileName;
        }

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('user/', $filename);
            $career->image = $filename;
        }

        $career->save();
//        dd($request->all());
        return redirect('/');

    }


}
