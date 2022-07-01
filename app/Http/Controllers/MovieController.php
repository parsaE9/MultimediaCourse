<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{

    public function index()
    {
        $movies = Movie::all();
        return view('index')->with('movies', $movies);
    }


    public function show($id)
    {
        $movie = Movie::findOrFail($id);
        return view('show')->with('movie', $movie);
    }

}
