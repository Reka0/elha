<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('admin.home');
    }

    public function storeHome(Request $request)
    {
        // Logic to store home data
    }

    public function gallery()
    {
        return view('admin.gallery');
    }

    public function storeGallery(Request $request)
    {
        // Logic to store gallery data
    }

    public function about()
    {
        return view('admin.about');
    }

    public function storeAbout(Request $request)
    {
        // Logic to store about data
    }

    public function siswaPegawai()
    {
        return view('admin.siswa_pegawai');
    }

    public function storeSiswaPegawai(Request $request)
    {
        // Logic to store siswa & pegawai data
    }

    public function pendaftaran()
    {
        return view('admin.pendaftaran');
    }

    public function storePendaftaran(Request $request)
    {
        // Logic to store pendaftaran data
    }
}
