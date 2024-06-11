<?php

namespace App\Http\Controllers;

use App\Core\CareerInterface;
use App\Mail\ContactUsMail;
use App\Models\Doctor;
use App\Models\Gallery;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class frontend extends Controller
{
    private $careerInterface;
    public function __construct(CareerInterface $careerInterface)
    {
        $this->careerInterface = $careerInterface;
    }
    public function Index()
    {
        return view('frontend.index', [
            'doctors' => Doctor::latest()->get(),
            'videos' => Gallery::latest()->where('type', 'video')->get(),
            'newss'=> News::orderByDesc('id')->take(5)->get()
        ]);
    }
    public function AboutUs()
    {
        return view('frontend.about');
    }
    public function Services()
    {
        return view('frontend.services');
    }
    public function Doctors()
    {
        return view('frontend.doctors', [
            'doctors' => Doctor::latest()->get(),
        ]);
    }
    public function Career()
    {
        return view('frontend.career.index', [
            'careers' => $this->careerInterface->getAllJobs()->get(),
        ]);
    }

    public function CareerSingle($slug)
    {
        return view('frontend.career.single', [
            'career' => $this->careerInterface->getJob($slug),
        ]);
    }

    public function Careerapplication(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'form_Phone' => 'required|string',
            'form_Email' => 'required|email',
            'form_message' => 'required|string',
            'fileToUpload' => 'required',
        ]);
        $data = $request->only(['first_name', 'last_name', 'form_Phone', 'form_Email', 'form_message', 'fileToUpload']);
       
        $data['job_post_id'] = $id;
        if($this->careerInterface->submitApplication($data)){
            return back()->with('msg', 'Your application has been submitted successfully.');
        }else{
            return back()->with('msg', 'Some error occur! try again.');

        }

    }

    public function News()
    {
        return view('frontend.news.index')->with('newss', News::orderByDesc('id')->paginate(5));
    }

    public function newsSingle($slug)
    {
        return view('frontend.news.single')->with('news', News::where('slug',$slug)->first());
    }
    
    public function ContactUs()
    {
        return view('frontend.contact');
    }

    public function contactPost(Request $request) {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'form_Phone' => 'required|string',
            'form_Email' => 'required|email',
            'form_message' => 'required|max:1000'
        ]);
        $data = $request->only('first_name','last_name', 'form_Email', 'form_Phone', 'form_message');
        try {
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new ContactUsMail($data));
            return back()->with('msg', 'Thanks for your time..');
        } catch (\Throwable $th) {
            Log::debug('mailerror', [$th->getMessage()]);
            return back()->with('msg', 'Some error occur! Please try again');
        }
    }
    public function Courses()
    {
        return view('frontend.courses');
    }
}
