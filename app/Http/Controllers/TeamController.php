<?php

namespace App\Http\Controllers;

use App\roundService;
use App\Team;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function team()
    {
        $team = Team::all();
        $roundService  = roundService::all();
        return view('user.team', compact('team', 'roundService'));

    }
}
