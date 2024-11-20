@extends('layouts.admin')

@section('title', 'Detail Pendaftaran')

@section('content')
    <div class="container mt-5">
        <h1>Detail Pendaftaran</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Nama Calon Siswa: {{ $pendaftaran->nama_calon_siswa }}</h5>
                <p class="card-text"><strong>Asal Sekolah:</strong> {{ $pendaftaran->asal_sekolah }}</p>
                <p class="card-text"><strong>Tempat Lahir:</strong> {{ $pendaftaran->tempat_lahir }}</p>
                <p class="card-text"><strong>Tanggal Lahir:</strong>
                    {{ \Carbon\Carbon::parse($pendaftaran->tanggal_lahir)->format('d-m-Y') }}</p>
                <p class="card-text"><strong>Alamat:</strong> {{ $pendaftaran->alamat }}</p>
                <p class="card-text"><strong>Nama Bapak:</strong> {{ $pendaftaran->nama_bapak }}</p>
                <p class="card-text"><strong>Nama Ibu:</strong> {{ $pendaftaran->nama_ibu }}</p>
                <p class="card-text"><strong>Nomor Bapak/Ibu:</strong> {{ $pendaftaran->nomor_bapak_ibu }}</p>
                <p class="card-text"><strong>Email:</strong> {{ $pendaftaran->email }}</p>
                <a href="{{ route('admin.pendaftaran.index') }}" class="btn btn-primary">Kembali</a>
            </div>
        </div>
    </div>
@endsection
