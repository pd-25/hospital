<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontend extends Controller
{
    public function index (){
        return view("frontend.index");
    }
    public function AboutUs (){
        return view("frontend.about");
    } public function Services (){
        return view("frontend.services");
    }
}
