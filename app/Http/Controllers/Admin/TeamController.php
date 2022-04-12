<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\service;
use App\Team;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TeamController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function teamList()
    {
        $team = Team::all();
        return view('admin.teams.teamList', compact('team'));

    }

    public function team()
    {


        return view('admin.teams.memberAdd');

    }

    public function memberAdd(Request $request)
    {
        $request->validate([
            'team_name' => 'required',
            'designation' => 'required',
            'quote' => 'required',
        ]);

        $team = new Team();
        $team->team_name = $request->input('team_name');
        $team->designation = $request->input('designation');
        $team->quote = $request->input('quote');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('team/', $filename);
            $team->image = $filename;
        }
        $team->fbLink = $request->input('fbLink');
        $team->fiverrLink = $request->input('fiverrLink');
        $team->upworkLink = $request->input('upworkLink');
        $team->save();

        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/teamList');

    }

    public function memberEdit($id)
    {
        $team = Team::find($id);
        return view('admin.teams.teamEdit', compact('team'));

    }

    public function memberUpdate(Request $request, $id)
    {
        $team = Team::find($id);
        $team->team_name = $request->input('team_name');
        $team->designation = $request->input('designation');
        $team->quote = $request->input('quote');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('team/', $filename);
            $team->image = $filename;
        }
        $team->fbLink = $request->input('fbLink');
        $team->fiverrLink = $request->input('fiverrLink');
        $team->upworkLink = $request->input('upworkLink');
        $team->save();

        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/teamList');

    }

    public function teamDelete($id)
    {
        $team = Team::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }
}
