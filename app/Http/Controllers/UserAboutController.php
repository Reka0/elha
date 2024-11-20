<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class UserAboutController extends Controller
{
    public function index()
    {
        $abouts = About::all();
        return view('user.about.index', compact('abouts'));
    }
}
