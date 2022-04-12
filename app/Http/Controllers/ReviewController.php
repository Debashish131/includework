<?php

namespace App\Http\Controllers;

use App\review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function review()
    {
        $review = review::all();
        return view('user.review', compact('review'));

    }
}
