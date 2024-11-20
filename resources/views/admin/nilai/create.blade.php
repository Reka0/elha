@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Input Nilai Siswa: {{ $siswa->nama }}</h2>

        <form action="{{ route('admin.nilai.store') }}" method="POST">
            @csrf
            <input type="hidden" name="siswa_id" value="{{ $siswa->id }}">

            <div class="form-group">
                <label>Bahasa Inggris</label>
                <input type="number" name="bahasa_inggris" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Matematika</label>
                <input type="number" name="matematika" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Bahasa Indonesia</label>
                <input type="number" name="bahasa_indonesia" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Kejuruan</label>
                <input type="number" name="kejuruan" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input type="number" name="agama" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
@endsection
