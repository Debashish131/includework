<?php

namespace App\Http\Controllers;

use App\project;
use App\showCase;
use Illuminate\Http\Request;

class ProjectdetailsController extends Controller
{


    public function singleproject($id)
    {
        $showcase = showCase::find($id);
        return view('user.projectdetails', compact('showcase'));

    }
}
