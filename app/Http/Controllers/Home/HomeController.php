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
    //if change the about page then change the route in web.php
    public function about(){
        $data['page_title'] = 'About Us';
        return view('home.about', $data);
    }
}
