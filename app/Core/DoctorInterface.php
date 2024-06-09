<?php
namespace App\Core;

interface DoctorInterface {
    public function getAllDoctors();
    public function singleDoctor($slug);
}