<?php
namespace App\Core;

use App\Models\Blog;
use App\Models\Doctor;

class DoctorRepo implements DoctorInterface {

    public function getAllDoctors() {
        return Doctor::query()->orderByDesc('id');
    }

    public function singleDoctor($slug){
        return Doctor::where('slug', $slug)->first();
    }

}