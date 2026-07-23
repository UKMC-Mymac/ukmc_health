<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['page_title'] = 'UKMC SCHOOL OF HEALTH';
        return view('home.index', $data);
    }

    public function why_us(){
        $data['page_title'] = 'UKMC | Why us';
        return view('why-us.why-us', $data);
    }
    
    public function campus(){
        $data['page_title'] = 'UKMC | Campus';
        return view('campus.campus', $data);
    }

    //if change the about page then change the route in web.php
    public function about(){
        $data['page_title'] = 'About Us';
        return view('about.about', $data);
    }
}
