<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use App\Models\NilaiSiswa;
use Illuminate\Http\Request;

class NilaiSiswaController extends Controller
{
    public function index()
    {
        // Ambil semua data siswa beserta nilai mereka
        $siswas = Siswa::with('nilai')->get();

        return view('admin.nilai.index', compact('siswas'));
    }
    public function create($siswa_id)
    {
        $siswa = Siswa::findOrFail($siswa_id);
        return view('admin.nilai.create', compact('siswa'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'bahasa_inggris' => 'required|integer|min:0|max:100',
            'matematika' => 'required|integer|min:0|max:100',
            'bahasa_indonesia' => 'required|integer|min:0|max:100',
            'kejuruan' => 'required|integer|min:0|max:100',
            'agama' => 'required|integer|min:0|max:100',
            'siswa_id' => 'required|exists:siswas,id'
        ]);

        $rata_rata = ($request->bahasa_inggris + $request->matematika + $request->bahasa_indonesia + $request->kejuruan + $request->agama) / 5;

        NilaiSiswa::create([
            'siswa_id' => $request->siswa_id,
            'bahasa_inggris' => $request->bahasa_inggris,
            'matematika' => $request->matematika,
            'bahasa_indonesia' => $request->bahasa_indonesia,
            'kejuruan' => $request->kejuruan,
            'agama' => $request->agama,
            'rata_rata' => $rata_rata,
        ]);

        return redirect()->route('admin.nilai.index')->with('success', 'Nilai siswa berhasil ditambahkan');
    }
    public function edit($id)
    {
        // Temukan data nilai berdasarkan ID
        $nilai = NilaiSiswa::findOrFail($id);
        $siswa = $nilai->siswa; // Mengambil data siswa terkait

        // Tampilkan halaman edit dengan data nilai dan siswa
        return view('admin.nilai.edit', compact('nilai', 'siswa'));
    }
    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'bahasa_inggris' => 'required|integer|min:0|max:100',
            'matematika' => 'required|integer|min:0|max:100',
            'bahasa_indonesia' => 'required|integer|min:0|max:100',
            'kejuruan' => 'required|integer|min:0|max:100',
            'agama' => 'required|integer|min:0|max:100',
        ]);

        // Temukan data nilai berdasarkan ID
        $nilai = NilaiSiswa::findOrFail($id);

        // Update data nilai
        $nilai->update([
            'bahasa_inggris' => $request->bahasa_inggris,
            'matematika' => $request->matematika,
            'bahasa_indonesia' => $request->bahasa_indonesia,
            'kejuruan' => $request->kejuruan,
            'agama' => $request->agama,
            'rata_rata' => ($request->bahasa_inggris + $request->matematika + $request->bahasa_indonesia + $request->kejuruan + $request->agama) / 5,
        ]);

        return redirect()->route('admin.nilai.index')->with('success', 'Nilai berhasil diperbarui.');
    }
    public function destroy($id)
    {
        // Temukan data nilai berdasarkan ID dan hapus
        $nilai = NilaiSiswa::findOrFail($id);
        $nilai->delete();

        return redirect()->route('admin.nilai.index')->with('success', 'Nilai berhasil dihapus.');
    }
    public function show($id)
    {
        $siswa = Siswa::with('nilai')->findOrFail($id); // Mengambil data siswa beserta nilainya
        return view('user.nilai.show', compact('siswa'));
    }
}
