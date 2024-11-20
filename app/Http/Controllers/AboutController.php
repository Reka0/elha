<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutController extends Controller
{
    public function index()
    {
        $abouts = About::latest()->get();
        return view('admin.about.index', compact('abouts'));
    }

    public function create()
    {
        return view('admin.about.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('public/photos');
            $photoName = basename($photoPath);
        } else {
            $photoName = null;
        }

        About::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $photoName,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'About added successfully.');
    }

    public function edit(About $about)
    {
        return view('admin.about.edit', compact('about'));
    }

    public function update(Request $request, About $about)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            if ($about->photo) {
                Storage::delete('public/photos/' . $about->photo);
            }
            $photoPath = $request->file('photo')->store('public/photos');
            $about->photo = basename($photoPath);
        }

        $about->update([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $about->photo,
        ]);

        return redirect()->route('admin.about.index')->with('success', 'About updated successfully.');
    }

    public function destroy(About $about)
    {
        if ($about->photo) {
            Storage::delete('public/photos/' . $about->photo);
        }
        $about->delete();
        return redirect()->route('admin.about.index')->with('success', 'About deleted successfully.');
    }
}
