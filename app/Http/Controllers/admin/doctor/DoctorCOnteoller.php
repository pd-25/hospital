<?php

namespace App\Http\Controllers\admin\doctor;

use App\Core\DoctorInterface;
use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
class DoctorCOnteoller extends Controller
{
    private $doctorInterface;
    public function __construct(DoctorInterface $doctorInterface)
    {
        $this->doctorInterface = $doctorInterface;
    }
    public function index(){

        return 'Under Work';
        // return view('admin.blog.index')->with('blogs', $this->doctorInterface->getAllDoctors()->paginate(10));
    }

    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'string',
            'description' => 'string|max:5000',
            'image' => 'required',
        ]);
        $data = $request->only('title', 'description', 'image');
        $slug = Str::slug($data['title']);
        $slug_count = DB::table('blogs')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . rand(100000, 999999) . '-' . $slug;
        }
        $data['slug'] = $slug;
        if ($request->has('image')) {
            $image = $request->file('image');

            $blog_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/BlogImage', $blog_image);

            $data['image'] = 'BlogImage/' . $blog_image;
        }
        $data['created_at'] = now();

        $store = DB::table('blogs')->insert($data);
        if ($store) {
            return redirect('admin/blogs')->with('msg', 'New Blog Inserted Successfully');
        } else {
            return redirect()->back()->with('msg', 'Some Error Occur!');
        }
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
        return view('admin.blog.edit')->with('blog', $this->doctorInterface->singleDoctor($slug));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'string',
            'description' => 'string|max:5000',
        ]);
        $img = DB::table('blogs')->where('slug', $slug)->select('image')->first();
        $data = $request->only('title', 'description');
        if ($request->has('image')) {
            File::delete('storage/BlogImage/' . $img->image);

            $image = $request->file('image');
            $blog_img = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/BlogImage', $blog_img);

            $data['image'] = 'BlogImage/' . $blog_img;
        }

        $update = Doctor::where('slug', $slug)->update($data);
        if ($update) {
            return redirect('admin/blogs')->with('msg', 'Blog is Updated Successfully');
        } else {
            return redirect()->back()->with('msg', 'Some Error Occured!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $delete_blog = Doctor::where('slug',$slug)->first();
        $delete_blog->delete();
        return redirect()->back()->with('msg',$delete_blog->title .' has been deleted successfully');
    }
}
