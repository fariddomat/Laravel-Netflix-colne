<?php

namespace App\Http\Controllers;

use App\Category;
use App\Movie;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $latest_movies=Movie::latest()
                ->limit(2)
                ->get();
        $categories=Category::where('name','Action')
            ->orWhere('name','Drama')
            ->with('movies')
            ->get();
        return view('welcome' , compact('latest_movies','categories'));
    }
}
