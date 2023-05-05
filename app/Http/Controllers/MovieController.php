<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    //
    public function index()
    {
        // $movies = $request->query('search');
        // $results = Movie::where('name','like','%har%')->limit(10)->get();
        return view ('index');
    }
    public function results(Request $request)
    {
        $movies = $request->query('search');
        $results = Movie::where('name','like',"%{$movies}%")->limit(10)->get();
        // return response()->json($results);
        return view ('results',compact('results'));
    }
}
