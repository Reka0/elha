<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class UserPendaftaranController extends Controller
{
    public function create()
    {
        return view('user.pendaftaran.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_calon_siswa' => 'required',
            'asal_sekolah' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required|date',
            'alamat' => 'required',
            'nama_bapak' => 'required',
            'nama_ibu' => 'required',
            'nomor_bapak_ibu' => 'required',
            'email' => 'nullable|email',
        ]);

        Pendaftaran::create($request->all());

        return redirect()->route('user.pendaftaran.create')->with('success', 'Pendaftaran berhasil dikirim.');
    }
}
