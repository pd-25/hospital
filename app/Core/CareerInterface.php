<?php
namespace App\Core;

interface CareerInterface {
    public function getAllJobs();
    public function getJob($slug);

    public function submitApplication(array $applyData);
    
    public function internApplications();

    
}