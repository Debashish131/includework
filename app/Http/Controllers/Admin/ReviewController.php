<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\review;
use App\Team;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function reviewList()
    {
        $review = review::all();
        return view('admin.review.reviewList', compact('review'));

    }

    public function reviewForm()
    {

        return view('admin.review.reviewAdd');

    }

    public function reviewAdd(Request $request)
    {
        $request->validate([
            'reviewer_name' => 'required',
            'company' => 'required',
            'quote' => 'required',
            'image' => 'required',
        ]);

        $review = new review();
        $review->reviewer_name = $request->input('reviewer_name');
        $review->company = $request->input('company');
        $review->quote = $request->input('quote');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('team/', $filename);
            $review->image = $filename;
        }
        $review->save();
        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/reviewList');

    }

    public function reviewEdit($id)
    {
        $review = review::find($id);
        return view('admin.review.reviewEdit', compact('review'));

    }

    public function reviewUpdate(Request $request, $id)
    {
        $request->validate([
            'reviewer_name' => 'required',
            'company' => 'required',
            'quote' => 'required',
            'image' => 'required',
        ]);

        $review = review::find($id);
        $review->reviewer_name = $request->input('reviewer_name');
        $review->company = $request->input('company');
        $review->quote = $request->input('quote');
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            // dd($request->file('image'));
            $extension = $file->getClientOriginalExtension();
            $filename = $file->getClientOriginalName();
            $file->move('team/', $filename);
            $review->image = $filename;
        }
        $review->save();
        Toastr::success('Data Submitted Successfully', 'success');
        return redirect('/reviewList');

    }

    public function reviewDelete($id)
    {
        $review = review::find($id)->delete();
        Toastr::error('Report delete Successfully', 'Danger', ["positionClass" => "toast-top-right"]);
        return back();

    }
}
