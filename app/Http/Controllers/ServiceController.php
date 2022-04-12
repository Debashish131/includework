<?php

namespace App\Http\Controllers;

use App\discuss_service;
use App\roundService;
use App\service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {

        $service = service::all();
        $discuss = discuss_service::all();
        $roundService = roundService::all();
        return view('user.service', compact('service', 'discuss', 'roundService'));

    }

    public function service_details($id)
    {
        $singleservice = service::find($id);
        $service = service::all();
        return view('user.SingleService', compact('singleservice', 'service'));

    }

}
