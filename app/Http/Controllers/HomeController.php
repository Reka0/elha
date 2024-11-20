<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homes = Home::latest()->get();
        return view('admin.home.index', compact('homes'));
    }

    public function gallery()
    {
        $homes = Home::latest()->get();
        return view('user.gallery.index', compact('homes'));
    }

    public function create()
    {
        return view('admin.home.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        if ($request->hasFile('photo')) {
            $imageName = time() . '.' . $request->photo->extension();
            $request->photo->storeAs('photos', $imageName, 'public');
        }

        Home::create([
            'title' => $request->title,
            'description' => $request->description,
            'photo' => $imageName ?? null,
        ]);

        return redirect()->route('admin.home.index')
            ->with('success', 'Home created successfully.');
    }

    public function edit(Home $home)
    {
        return view('admin.home.edit', compact('home'));
    }

    public function update(Request $request, Home $home)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $data = [
            'title' => $request->title,
            'description' => $request->description,
        ];

        if ($request->hasFile('photo')) {
            $photoPath = $request->file('photo')->store('photos', 'public');
            $data['photo'] = $photoPath;
        }

        $home->update($data);

        return redirect()->route('admin.home.index')->with('success', 'Content data updated successfully.');
    }

    public function destroy(Home $home)
    {
        $home->delete();
        return redirect()->route('admin.home.index')->with('success', 'Content data deleted successfully.');
    }
}
