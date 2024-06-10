<?php

namespace App\Http\Controllers;

use App\Models\Doctor;
use Illuminate\Http\Request;

class frontend extends Controller
{
    public function Index (){
        return view("frontend.index");
    }
    public function AboutUs (){
        return view("frontend.about");
    } 
    public function Services (){
        return view("frontend.services");
    }
    public function Doctors (){
        return view("frontend.doctors", [
            'doctors' => Doctor::latest()->get()
        ]);
    }
    public function Career (){
        return view("frontend.career.index");
    }
    public function News (){
        return view("frontend.news.index");
    }
    public function ContactUs (){
        return view("frontend.contact");
    }
    public function Courses (){
        return view("frontend.courses");
    }
}
