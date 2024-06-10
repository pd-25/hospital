<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.gallery.index', [
            'galleries' => Gallery::latest()->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     */
   public function store(Request $request)
{
    $request->validate([
        'type' => 'required',
        'file' => 'required_if:type,image',
        'file.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'video' => 'required_if:type,video'
    ]);

    if ($request->type === 'image') {
        if ($request->hasFile('file')) {
            foreach ($request->file('file') as $file) {
                $imageName = time() . '_' . $file->getClientOriginalName();
                $file->move(public_path('images'), $imageName);

                $gallery = new Gallery();
                $gallery->type = 'image';
                $gallery->file = $imageName;
                $gallery->save();
            }
        }
    } elseif ($request->type === 'video') {
        $gallery = new Gallery();
        $gallery->type = 'video';
        $gallery->file = $request->video;
        $gallery->save();
    }

    return redirect()->route('galleries.index')->with('success', 'Gallery created successfully.');
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
       Gallery::where('id', $id)->delete();
    return back()->with('success', 'Gallery deleted successfully.');

    }
}
