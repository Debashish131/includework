<?php

namespace App\Http\Controllers\Admin;

use App\career;
use App\Circular;
use App\Http\Controllers\Controller;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class CareerController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function careerview()
    {
        $career = career::all();
        return view('admin.career.careerview', compact('career'));

    }

    public function careerCvdelete($id)
    {
        $career = career::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

    public function circularUpload()
    {

        return view('admin.career.circularupload');

    }

    public function circularAdd(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
        $circular = new Circular();
        $circular->position = $request->input('position');
        $circular->date = $request->input('date');
        $circular->noPost = $request->input('noPost');
        $circular->file = $request->input('file');

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move(public_path('circular'), $fileName);
            $circular->file = $fileName;
        }
        $circular->save();
        return redirect('/circularList');

    }

    public function circularList()
    {
        $circular = Circular::all();
        return view('admin.career.circularList', compact('circular'));

    }

    public function circularDelete($id)
    {
        $circular = Circular::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

    public function circularEdit($id)
    {
        $circular = Circular::find($id);
        return view('admin.career.circularEdit', compact('circular'));

    }

    public function circularUpdate(Request $request, $id)
    {
        $request->validate([
            'file' => 'required|mimes:pdf,xlx,csv|max:2048',

        ]);

        $circular = Circular::find($id);
        $circular->position = $request->input('position');
        $circular->date = $request->input('date');
        $circular->noPost = $request->input('noPost');
        $circular->file = $request->input('file');

        if ($request->file('file')) {
            $file = $request->file('file');
            $fileName = time() . '.' . $file->getClientOriginalExtension();
            $request->file->move(public_path('circular'), $fileName);
            $circular->file = $fileName;
        }
        $circular->save();
        return redirect('/circularList');

    }
}
