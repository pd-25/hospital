<?php

namespace App\Http\Controllers\admin\news;

use App\Http\Controllers\Controller;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.news.index')->with('newss', News::orderByDesc('id')->get());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.news.create');
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
        $slug_count = DB::table('news')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . rand(100000, 999999) . '-' . $slug;
        }
        $data['slug'] = $slug;
        if ($request->has('image')) {
            $image = $request->file('image');

            $news_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/NewsImage', $news_image);

            $data['image'] = 'NewsImage/' . $news_image;
        }
        $data['created_at'] = now();
        $store = DB::table('news')->insert($data);
        if ($store) {
            return redirect('admin/news-events')->with('msg', 'New News & Event Inserted Successfully');
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
        return view('admin.news.edit')->with('news', News::where('slug',$slug)->first());
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
        $img = DB::table('news')->where('slug', $slug)->select('image')->first();
        $data = $request->only('title', 'description');
        if ($request->has('image')) {
            File::delete('storage/NewsImage/' . $img->image);

            $image = $request->file('image');
            $blog_img = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/NewsImage', $blog_img);

            $data['image'] = 'NewsImage/' . $blog_img;
        }

        $update = News::where('slug', $slug)->update($data);
        if ($update) {
            return redirect('admin/news-events')->with('msg', 'The Data Updated Successfully');
        } else {
            return redirect()->back()->with('msg', 'Some Error Occured!');
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $news = News::where('slug',$slug)->first();
        $news->delete();
        return redirect()->back()->with('msg',$news->title .' has been deleted successfully');
    }
}
