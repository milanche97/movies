<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use Illuminate\Http\Request;

class MoviesController extends Controller
{
    public static function index(){
        $movies = Movies::all();
        return view('index', compact('movies'));
    }
    public static function show($id){
        $movies = Movies::find($id);
        return view('show', compact('movies'));
    }
}
