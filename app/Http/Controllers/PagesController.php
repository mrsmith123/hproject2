<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('index');
    }

    public function mangas(){
        return view('pages.mangas');
    }

    public function blogpage(){
        return view('pages.blogpage');
    }

    public function about(){
        return view('pages.about');
    }

    public function venue(){
        return view('pages.venue');
    }

    public function profile(){
        return view('pages.profile');
    }
}
