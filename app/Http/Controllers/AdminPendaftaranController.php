<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class AdminPendaftaranController extends Controller
{
    public function index()
    {
        $pendaftarans = Pendaftaran::all();
        return view('admin.pendaftaran.index', compact('pendaftarans'));
    }

    public function show($id)
    {
        $pendaftaran = Pendaftaran::findOrFail($id);
        return view('admin.pendaftaran.show', compact('pendaftaran'));
    }
}
