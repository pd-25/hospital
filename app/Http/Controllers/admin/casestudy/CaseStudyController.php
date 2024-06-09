<?php

namespace App\Http\Controllers\admin\casestudy;

use App\Http\Controllers\Controller;
use App\Models\CaseStudy;
use App\Models\CaseStudySection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CaseStudyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.casestudy.index', [
            'caseStudies' => CaseStudy::orderByDesc('id')->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.casestudy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        $mainData = $request->only('title', 'description', 'image');

        $slug = Str::slug($mainData['title']);
        $slug_count = DB::table('case_studies')->where('slug', $slug)->count();
        if ($slug_count > 0) {
            $slug = time() . rand(100000, 999999) . '-' . $slug;
        }
        $mainData['slug'] = $slug;
        if ($request->has('image')) {
            $image = $request->file('image');

            $caseStudy_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();

            $image->storeAs('public/CaseStudy', $caseStudy_image);

            $mainData['image'] = 'CaseStudy/' . $caseStudy_image;
        }
        $caseStudy = CaseStudy::create($mainData);

        $sections = [];
        foreach ($request->input('section') as $index => $section) {
            $sections[] = new CaseStudySection([
                'title' => $section['title'],
                'description' => $section['description'],
            ]);
        }

        $caseStudy->sections()->saveMany($sections);

        return redirect()->route('case-studies.index')->with('msg', 'Case Study Inserted Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $slug)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $slug)
    {
        return view('admin.casestudy.edit', [
            'caseStudy' => CaseStudy::with('sections')->where('slug', $slug)->first(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $slug)
    {
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
            'image' => 'nullable|image', // Make image optional
            'section.*.title' => 'required|string',
            'section.*.description' => 'required|string',
        ]);

        $caseStudy = CaseStudy::where('slug', $slug)->firstOrFail();

        $mainData = $request->only('title', 'description');
        if ($request->hasFile('image')) {
            if ($caseStudy->image) {
                Storage::delete($caseStudy->image);
            }
            $image = $request->file('image');
            $caseStudy_image = time() . rand(0000, 9999) . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/CaseStudy', $caseStudy_image);
            $mainData['image'] = 'CaseStudy/' . $caseStudy_image;
        }
        $caseStudy->update($mainData);

        $existingSectionIds = $caseStudy->sections->pluck('id')->toArray();

        $sections = $request->input('section', []);
        $updatedSectionIds = [];

        foreach ($sections as $sectionData) {
            if (isset($sectionData['id'])) {
                $section = CaseStudySection::findOrFail($sectionData['id']);
                $section->update([
                    'title' => $sectionData['title'],
                    'description' => $sectionData['description'],
                ]);
                $updatedSectionIds[] = $section->id;
            } else {
                $newSection = $caseStudy->sections()->create([
                    'title' => $sectionData['title'],
                    'description' => $sectionData['description'],
                ]);
                $updatedSectionIds[] = $newSection->id;
            }
        }

        $sectionsToDelete = array_diff($existingSectionIds, $updatedSectionIds);
        CaseStudySection::destroy($sectionsToDelete);

        return redirect()->route('case-studies.index')->with('msg', 'Case Study updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $slug)
    {
        $deleteCaseStudy = CaseStudy::where('slug', $slug)->first();
        if($deleteCaseStudy){
            $deleteCaseStudy->sections()->delete();
        }
        $deleteCaseStudy->delete();
        return redirect()->route('case-studies.index')->with('msg', 'Case Study Has Been Successfully.');
    }
}
