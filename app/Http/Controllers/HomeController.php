<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('Users.home');
    }
    public function about()
    {
        return view('Users.about');
    }
    public function contact()
    {
        return view ('Users.contact');
    }
    public function appointment()
    {
        return view ('Users.appointment');
    }

//  These two functions are for the blog
    public function blog()
    {
        return view ('Users.blog');
    }
    public function single_blog()
    {
        return view('Users.single_blog');
    }

// These two functions are for the projects
    public function project()
    {
        return view ('Users.projects');
    }
    public function single_project()
    {
        return view ('Users.single_project');
    }


    public function services()
    {
        return view('Users.services');
    }

    public function donate()
    {
        return view('Users.donate');
    }
}
