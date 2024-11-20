<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;

class UserSiswaController extends Controller
{
    public function index()
    {
        $siswas = Siswa::all();
        return view('user.siswa.index', compact('siswas'));
    }
    public function showNilai($id)
    {
        $siswa = Siswa::with('nilai')->findOrFail($id);
        return view('user.siswa.nilai', compact('siswa'));
    }
}
