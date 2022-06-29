<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $good_movies = Movie::where('vote', '>',8.7)->get();
        return view('home', compact('good_movies'));
    }

    public function about(){
        return view('about');
    }

}
