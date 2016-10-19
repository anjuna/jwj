<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

use App\Type; use App\Reviewable; use App\Review;

class ReviewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index');
    }
    public function index()
    {
        return view('pages.reviews.index');
    }

    public function create()
    {
        $types = Type::all();
        $reviewables = Reviewable::all();

        return view('pages.reviews.create', compact('types', 'reviewables'));
    }

    public function save(Request $request)
    {
        $this->validate($request, [
            'type' => 'required',
            'reviewable' => 'required',
            'body' => 'required'
        ]);

        Review::create([
            'user_id' => Auth::user()->id,
            'reviewable_id' => $request->reviewable,
            'body' => $request->body
        ]);

        return redirect('/reviews');
    }
}
