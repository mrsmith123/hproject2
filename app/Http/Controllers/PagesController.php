<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

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

    public function contact(){
        return view('pages.contact');
    }

    public function venue(){
        return view('pages.venue');
    }

    public function profile(){
        return view('pages.profile');
    }

    public function admin(){
        $users = User::select('users.*', 'roles.name as role')
                    ->leftJoin('roles', 'roles.permission', '=', 'users.permission')
                    ->paginate(25);

        return view('pages.admin', compact('users'));
    }
}
