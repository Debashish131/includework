<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\roundService;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class RoundServiceController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function roundServiceList()
    {
        $roundService = roundService::all();
        return view('admin.service.roundServiceList', compact('roundService'));

    }

    public function roundServiceForm()
    {

        return view('admin.service.roundServiceAdd');

    }

    public function roundServiceAdd(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'keyword' => 'required',
            'percentage' => 'required',

        ]);

        $roundService = new roundService();
        $roundService->service_name = $request->input('service_name');
        $roundService->keyword = $request->input('keyword');
        $roundService->percentage = $request->input('percentage');
        $roundService->save();
        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/roundServiceList');

    }

    public function roundServiceEdit($id)
    {
        $service = roundService::find($id);
        return view('admin.service.roundServiceEdit', compact('service'));

    }

    public function roundServiceUpdate(Request $request, $id)
    {
        $request->validate([
            'service_name' => 'required',
            'keyword' => 'required',
            'percentage' => 'required',
        ]);

        $roundService = roundService:: find($id);
        $roundService->service_name = $request->input('service_name');
        $roundService->keyword = $request->input('keyword');
        $roundService->percentage = $request->input('percentage');
        $roundService->save();
        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/roundServiceList');

    }

    public function roundServiceDelete($id)
    {
        $roundService = roundService::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

}
