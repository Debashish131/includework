<?php

namespace App\Http\Controllers;

use App\review;
use App\showCase;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function project()
    {
        $showCase = showCase::all();
        $review = review::all();
        return view('user.projectshow', compact('showCase', 'review'));

    }
}
