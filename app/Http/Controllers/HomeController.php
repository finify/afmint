<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //
   public function index(){
    return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function quote(){
        return view('home.quote');
    }

    public function services(){
        return view('home.services');
    }
    public function projects(){
        return view('home.projects');
    }

    public function solar(){
        return view('home.solar');
    }

}
