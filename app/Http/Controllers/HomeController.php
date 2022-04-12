<?php

namespace App\Http\Controllers;

use App\project;
use App\review;
use App\roundService;
use App\service;
use App\showCase;
use App\SingleService;
use App\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $service = service::all();
        $team = Team::all();
        $review = review::all();
        $roundService = roundService::all();
        $showCase = showCase::all();
        $project = project::all();

        return view('index', compact('service', 'team', 'review', 'roundService', 'showCase', 'project'));

    }

    public function contact()
    {
        return view('user.contactpage');

    }

    public function privacy()
    {

        return view('user.privacy');

    }
}
