<?php

namespace App\Http\Controllers\admin;

use App\Core\CareerInterface;
use App\Http\Controllers\Controller;
use App\Models\JobApplication;
use App\Models\JobPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use illuminate\Support\Str;

class CareerController extends Controller
{
    private $careerInterface;
    public function __construct(CareerInterface $careerInterface)
    {
        $this->careerInterface = $careerInterface;
    }
    public function index()
    {
        return view('admin.jobs.index', [
            'allJobs' => $this->careerInterface->getAllJobs()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string|max:2000',
            'location' => 'required|string'
        ]);
        $data = $request->only('title', 'desc', 'location');
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('job_posts')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = random_int(100000, 999999) . '-' . $slug;
        }
        $data['slug'] = $slug;
        JobPost::create($data);
        return redirect()->route('jobs.index')->with('msg', 'Job created successsfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('admin.jobs.edit', [
            'singleJob' => $this->careerInterface->getJob($slug)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'desc' => 'required|string|max:2000',
            'location' => 'required|string'
        ]);
        $data = $request->only('title', 'desc','location');
        JobPost::where('slug', $slug)->update($data);
        return back()->with('msg', 'Job updated successsfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $job = JobPost::where('slug', $slug)->first();
        if ($job) {
            $job->delete();
            return back()->with('msg', 'Job has been deleted successsfully');
        }else{
            return back()->with('msg', 'No Job found');
        }
    }

    public function getApplication() {
        return view('admin.applications.application', [
            'jobapplications' => $this->careerInterface->internApplications()->paginate(10)
        ]);
    }

    public function deleteApplication($slug){
        $job = JobApplication::where('slug', $slug)->first();
        if ($job) {
            $job->delete();
            return back()->with('msg', 'Job applications has been deleted successsfully');
        }else{
            return back()->with('msg', 'No Job found');
        }
    }
}
