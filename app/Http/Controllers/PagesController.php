<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function aboutMe()
    {
        return view('pages.aboutme');
    }

    public function aboutSite()
    {
        return view('pages.aboutsite');
    }
}
