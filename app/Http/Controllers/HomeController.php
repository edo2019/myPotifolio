<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Home;

class HomeController extends Controller
{
    
    public function index(){

        $data['getrecord'] = Home::all();

        $data['meta_title'] = 'Home';
        $data['class_name'] = 'home';


      return view('pages.index');
    }

    public function contact()
    {
        $data['meta_title'] = 'Home';
        $data['class_name'] = 'home';

        return view('pages.contact',$data);
    }

    
    public function about()
    {

        $data['meta_title'] = 'About';
        $data['class_name'] = 'about';
        return view('pages.about',$data);
    }

    
    public function resume()
    {
        $data['meta_title'] = 'Resume';
        $data['class_name'] = 'resume';
        return view('pages.resume',$data);
    }

    
    public function portfolio()
    {

        $data['meta_title'] = 'Portifolio';
        $data['class_name'] = 'portfolio';
        return view('pages.portfolio',$data);
    }

    
    public function myEvents()
    {
        $data['meta_title'] = 'MyEvents';
        $data['class_name'] = 'myEvents';
        return view('pages.myEvents',$data);
    }

    
    public function blog()
    {
        $data['meta_title'] = 'Blog';
        $data['class_name'] = 'blog';
        return view('pages.blog',$data);
    }
}
