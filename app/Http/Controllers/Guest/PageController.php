<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        return view('welcome', compact('movies'));
    }

    public function byVote()
    {
        $movies = Movie::orderBy('vote', 'DESC')->get();
        return view('welcome', compact('movies'));
    }

    public function byDate()
    {
        $movies = Movie::orderBy('date', 'ASC')->get();
        return view('welcome', compact('movies'));
    }
}
