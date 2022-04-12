<?php

namespace App\Http\Controllers;

use App\Circular;
use Illuminate\Http\Request;

class CircularController extends Controller
{
    public function circular()
    {
        $circular = Circular::all();
        return view('user.circular', compact('circular'));

    }
}
