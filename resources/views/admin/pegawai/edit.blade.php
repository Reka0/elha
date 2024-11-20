@extends('layouts.admin')

@section('title', 'Edit Pegawai')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Edit Pegawai
                    </div>
                    <div class="card-body">
                        <form action="{{ route('admin.pegawai.update', $pegawai->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" name="nama" id="nama" class="form-control"
                                    value="{{ $pegawai->nama }}" required>
                            </div>
                            <div class="form-group">
                                <label for="posisi">Posisi</label>
                                <input type="text" name="posisi" id="posisi" class="form-control"
                                    value="{{ $pegawai->posisi }}" required>
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control"
                                    value="{{ $pegawai->alamat }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
