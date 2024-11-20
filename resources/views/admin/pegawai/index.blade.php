@extends('layouts.admin')

@section('title', 'Daftar Pegawai')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar Pegawai</h4>
                        <a href="{{ route('admin.pegawai.create') }}" class="btn btn-primary">Tambah Pegawai</a>
                    </div>
                    <div class="card-body">
                        @if (session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>
                        @endif
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Nama</th>
                                    <th>Posisi</th>
                                    <th>Alamat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($pegawais as $pegawai)
                                    <tr>
                                        <td>{{ $pegawai->id }}</td>
                                        <td>{{ $pegawai->nama }}</td>
                                        <td>{{ $pegawai->posisi }}</td>
                                        <td>{{ $pegawai->alamat }}</td>
                                        <td>
                                            <a href="{{ route('admin.pegawai.edit', $pegawai->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.pegawai.destroy', $pegawai->id) }}" method="POST"
                                                style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
