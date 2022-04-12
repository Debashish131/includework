<?php

namespace App\Http\Controllers\Admin;

use App\discuss_service;
use App\Http\Controllers\Controller;
use App\service;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ServiceController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function adminService()
    {

        return view('admin.servicePage');

    }

    public function discussServiceAdd()
    {

        return view('admin.service.discussServiceAdd');

    }

    public function serviceList()
    {
        $service = service::all();
        return view('admin.serviceList', compact('service'));

    }

    public function discussServiceList()
    {
        $service = discuss_service::all();
        return view('admin.service.discussService', compact('service'));

    }

    public function serviceAdd(Request $request)
    {
        $request->validate([
            'service_name' => 'required',
            'service_short' => 'required',
            'service_details' => 'required',
        ]);

        $service = new service();
        $service->service_name = $request->input('service_name');
        $service->service_short = $request->input('service_short');
        $service->service_details = $request->input('service_details');
        $service->save();

        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/serviceList');

    }


    public function discussService(Request $request)
    {
        $request->validate([
            'numbering' => 'required',
            'title' => 'required',
            'short_des' => 'required',

        ]);

        $service = new discuss_service();
        $service->numbering = $request->input('numbering');
        $service->title = $request->input('title');
        $service->short_des = $request->input('short_des');
        $service->save();

        Toastr::success('Form Submitted Successfully', 'success');
        return back();

    }


    public function serviceEdit($id)
    {
        $service = service::find($id);
        return view('admin.serviceEdit', compact('service'));

    }

    public function serviceUpdate(Request $request, $id)
    {

        $service = service::find($id);
        $service->service_name = $request->input('service_name');
        $service->service_short = $request->input('service_short');
        $service->service_details = $request->input('service_details');
        $service->save();
        Toastr::info('Form Updated Successfully', 'Success');
        return redirect('/serviceList   ');

    }

    public function serviceDelete($id)
    {
        $service = service::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

    public function discussServiceEdit($id)
    {
        $service = discuss_service::find($id);
        return view('admin.service.discussServiceEdit', compact('service'));

    }

    public function discussServiceUpdate(Request $request, $id)
    {

        $service = discuss_service::find($id);
        $service->numbering = $request->input('numbering');
        $service->title = $request->input('title');
        $service->short_des = $request->input('short_des');
        $service->save();
        Toastr::info('Form Updated Successfully', 'Success');
        return redirect('/discussServiceList');

    }

    public function discussServiceDelete($id)
    {
        $service = discuss_service::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }

}
