<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\project;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function projectCount()
    {
        $project = project::all();
        return view('admin.project_count.projectcountAdd', compact('project'));

    }

    public function projectCountAdd(Request $request)
    {
        $request->validate([
            'total_project' => 'required',
            'total_customer' => 'required',
            'total_coffecup' => 'required',
        ]);

        $count = new project();
        $count->total_project = $request->input('total_project');
        $count->total_customer = $request->input('total_customer');
        $count->total_coffecup = $request->input('total_coffecup');
        $count->save();
        return back();

    }

    public function projectCountEdit($id)
    {
        $count = project::find($id);
        return view('admin.project_count.projectCountEdit', compact('count'));

    }


    public function projectCountUpdate(Request $request, $id)
    {
        $request->validate([
            'total_project' => 'required',
            'total_customer' => 'required',
            'total_coffecup' => 'required',
        ]);

        $count = project::find($id);
        $count->total_project = $request->input('total_project');
        $count->total_customer = $request->input('total_customer');
        $count->total_coffecup = $request->input('total_coffecup');
        $count->save();
        return redirect('/projectCount');

    }
}
