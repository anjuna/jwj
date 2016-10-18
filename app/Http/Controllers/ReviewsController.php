<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Type; use App\Reviewable;

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
}
