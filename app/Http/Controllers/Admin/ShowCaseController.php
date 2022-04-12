<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\showCase;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ShowCaseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function showCaseList()
    {
        $showCase = showCase::all();
        return view('admin.project_showcase.showCaseList', compact('showCase'));

    }

    public function showCaseForm()
    {

        return view('admin.project_showcase.showCaseAdd');

    }

    public function showCaseAdd(Request $request)
    {
        $showCase = new showCase();
        $showCase->name = $request->input('name');
        $showCase->categoryType = $request->input('categoryType');
        $showCase->tagName = $request->input('tagName');
        $showCase->hoverName = $request->input('hoverName');
        $showCase->category = $request->input('category');
        $showCase->hoverName = $request->input('hoverName');

        $showCase->companyName = $request->input('companyName');
        $showCase->projectDuration = $request->input('projectDuration');
        $showCase->projectType = $request->input('projectType');
        $showCase->projectDes1 = $request->input('projectDes1');
        $showCase->projectDes2 = $request->input('projectDes2');
        $showCase->projectDes3 = $request->input('projectDes3');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('case/', $filename);
            $showCase->image = $filename;
        }
        $showCase->save();

        return redirect('/showCaseList');

    }

    public function showCaseEdit($id)
    {
        $showCase = showCase::find($id);
        return view('admin.project_showcase.showCaseEdit', compact('showCase'));

    }

    public function showCaseUpdate(Request $request, $id)
    {
        $showCase = showCase::find($id);
        $showCase->name = $request->input('name');
        $showCase->categoryType = $request->input('categoryType');
        $showCase->tagName = $request->input('tagName');
        $showCase->hoverName = $request->input('hoverName');
        $showCase->category = $request->input('category');
        $showCase->hoverName = $request->input('hoverName');
        $showCase->companyName = $request->input('companyName');
        $showCase->projectDuration = $request->input('projectDuration');
        $showCase->projectType = $request->input('projectType');
        $showCase->projectDes1 = $request->input('projectDes1');
        $showCase->projectDes2 = $request->input('projectDes2');
        $showCase->projectDes3 = $request->input('projectDes3');


        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('case/', $filename);
            $showCase->image = $filename;
        }
        $showCase->save();

        return redirect('/showCaseList');

    }

    public function showCaseDelete($id)
    {
        $showCase = showCase::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

}
