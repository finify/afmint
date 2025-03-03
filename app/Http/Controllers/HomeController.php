<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Client;
use App\Models\Gallery;
use App\Models\Project;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getDetails(){

        $projects = Project::orderBy('id','desc')->get()->toArray();
        // $galleries = Gallery::orderBy('id','desc')->paginate(20);
        $galleries = Gallery::select('galleries.*','projects.name as project_name')->leftJoin('projects','projects.id','=','galleries.project_id')->orderBy('id','desc')->paginate(20);
        // dd(compact('projecttypes'));

        $clients = Client::orderBy('id','desc')->get()->toArray();

        $brands = Brand::orderBy('id','desc')->get()->toArray();

        return compact('projects','galleries','clients','brands');
    }
   public function index(){
    $details = $this->getDetails();
    return view('home.index')->with($details);
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
