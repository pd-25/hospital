<?php
namespace App\Core;

use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;
 class CareerRepo implements CareerInterface {
    public function getAllJobs(){
        return JobPost::query()->orderByDesc('id');
    }

    public function getJob($slug){
        return JobPost::where('slug', $slug)->first();
    }

    public function submitApplication(array $applyData) {
        if (!empty($applyData['fileToUpload'])) {
            $applyData['fileToUpload'] = $this->uploadDoc($applyData['fileToUpload']);
        }
        $slug = Str::slug($applyData['first_name'].'-application');
        $slug_count = DB::table('job_applications')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = random_int(100000, 999999) . '-' . $slug;
        }
        $applyData['slug'] = $slug;
        $application = JobApplication::create($applyData);
        return $application instanceof JobApplication;
    }

    public function uploadDoc($docFile)
    {
        $db_image = time() . rand(0000, 9999) . '.' . $docFile->getClientOriginalExtension();
        $docFile->storeAs("public/Resume", $db_image);
        return 'Resume/'.$db_image;
    }

    public function internApplications() {
        return JobApplication::query()->with('job')->orderByDesc('id');
    }
 }