<?php

namespace App\Http\Controllers;

use App\Models\Home;
use Illuminate\Http\Request;

class UserHomeController extends Controller
{
    public function index()
    {
        $homes = Home::orderBy('created_at', 'desc')->get();
        return view('user.home', compact('homes'));
    }
}
