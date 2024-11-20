@extends('user.layout')

@section('title', 'Daftar Pegawai')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">Daftar Pegawai</h1>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Posisi</th>
                            <th>Alamat</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($pegawais as $pegawai)
                            <tr>
                                <td>{{ $pegawai->id }}</td>
                                <td>{{ $pegawai->nama }}</td>
                                <td>{{ $pegawai->posisi }}</td>
                                <td>{{ $pegawai->alamat }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
