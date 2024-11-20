@extends('layouts.admin')

@section('content')
    <div class="container">
        <h2>Edit Nilai Siswa: {{ $siswa->nama }}</h2>

        <form action="{{ route('admin.nilai.update', $nilai->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Bahasa Inggris</label>
                <input type="number" name="bahasa_inggris" class="form-control" value="{{ $nilai->bahasa_inggris }}" required>
            </div>
            <div class="form-group">
                <label>Matematika</label>
                <input type="number" name="matematika" class="form-control" value="{{ $nilai->matematika }}" required>
            </div>
            <div class="form-group">
                <label>Bahasa Indonesia</label>
                <input type="number" name="bahasa_indonesia" class="form-control" value="{{ $nilai->bahasa_indonesia }}"
                    required>
            </div>
            <div class="form-group">
                <label>Kejuruan</label>
                <input type="number" name="kejuruan" class="form-control" value="{{ $nilai->kejuruan }}" required>
            </div>
            <div class="form-group">
                <label>Agama</label>
                <input type="number" name="agama" class="form-control" value="{{ $nilai->agama }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
        </form>
    </div>
@endsection
