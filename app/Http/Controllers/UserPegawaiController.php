<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class UserPegawaiController extends Controller
{
    public function index()
    {
        $pegawais = Pegawai::all();
        return view('user.pegawai.index', compact('pegawais'));
    }
}
