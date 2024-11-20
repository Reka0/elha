@extends('layouts.admin')

@section('title', 'Pendaftaran')

@section('content')
    <div class="container mt-5">
        <h1>Pendaftaran</h1>
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>Nama Calon Siswa</th>
                    <th>Asal Sekolah</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftarans as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->nama_calon_siswa }}</td>
                        <td>{{ $pendaftaran->asal_sekolah }}</td>
                        <td>{{ $pendaftaran->alamat }}</td>
                        <td>
                            <a href="{{ route('admin.pendaftaran.show', $pendaftaran->id) }}"
                                class="btn btn-info btn-sm">View</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
