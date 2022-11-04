<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index(){
        return view('home',[
            'title' => "movie",
            'img1' => "spiderman.jpg",
            'img2' => "pinocchio.jpg"
        ]);
    }
}
