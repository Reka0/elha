<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawais = Pegawai::latest()->get();
        return view('admin.pegawai.index', compact('pegawais'));
    }

    public function create()
    {
        return view('admin.pegawai.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'alamat' => 'required',
        ]);

        Pegawai::create($request->all());

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai added successfully.');
    }

    public function edit(Pegawai $pegawai)
    {
        return view('admin.pegawai.edit', compact('pegawai'));
    }

    public function update(Request $request, Pegawai $pegawai)
    {
        $request->validate([
            'nama' => 'required',
            'posisi' => 'required',
            'alamat' => 'required',
        ]);

        $pegawai->update($request->all());

        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai updated successfully.');
    }

    public function destroy(Pegawai $pegawai)
    {
        $pegawai->delete();
        return redirect()->route('admin.pegawai.index')->with('success', 'Pegawai deleted successfully.');
    }
}
