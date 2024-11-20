@extends('user.layout')

@section('title', 'Pendaftaran Calon Siswa')

@section('content')
    <div class="container mt-5">
        <h1>Pendaftaran Calon Siswa</h1>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('user.pendaftaran.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_calon_siswa">Nama Calon Siswa</label>
                <input type="text" name="nama_calon_siswa" id="nama_calon_siswa" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tempat_lahir">Tempat Lahir</label>
                <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_lahir">Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="nama_bapak">Nama Bapak</label>
                <input type="text" name="nama_bapak" id="nama_bapak" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama_ibu">Nama Ibu</label>
                <input type="text" name="nama_ibu" id="nama_ibu" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nomor_bapak_ibu">Nomor Bapak/Ibu</label>
                <input type="text" name="nomor_bapak_ibu" id="nomor_bapak_ibu" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email">Email (Opsional)</label>
                <input type="email" name="email" id="email" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Daftar</button>
        </form>
    </div>
@endsection
