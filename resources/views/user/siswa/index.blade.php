@extends('user.layout')

@section('title', 'Daftar Siswa')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">Daftar Siswa</h1>
                <table class="table table-bordered table-striped">
                    <thead class="thead-dark">
                        <tr>
                            <th>NISN</th>
                            <th>Nama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($siswas as $siswa)
                            <tr>
                                <td>{{ $siswa->nisn }}</td>
                                <td>{{ $siswa->nama }}</td>
                                <td>{{ $siswa->tempat_lahir }}</td>
                                <td>{{ $siswa->tanggal_lahir }}</td>
                                <td>
                                    <a href="{{ route('user.siswa.nilai', $siswa->id) }}" class="btn btn-info btn-sm">Lihat
                                        Nilai</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
