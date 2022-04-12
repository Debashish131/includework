<?php

namespace App\Http\Controllers;

use App\About_us;
use App\discuss_service;
use App\project;
use App\roundService;
use App\Team;
use Illuminate\Http\Request;

class AboutUsController extends Controller
{
    public function aboutUs()
    {
        $discuss = discuss_service::all();
        $project = project::all();
        $round = roundService::all();
        $team = Team::all();
        return view('user.aboutus', compact('discuss', 'project', 'round', 'team'));

    }
}
