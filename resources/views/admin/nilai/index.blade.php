@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h2>Daftar Nilai Siswa</h2>

        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>Nama Siswa</th>
                    <th>Bahasa Inggris</th>
                    <th>Matematika</th>
                    <th>Bahasa Indonesia</th>
                    <th>Kejuruan</th>
                    <th>Agama</th>
                    <th>Rata-rata</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswas as $siswa)
                    <tr>
                        <td>{{ $siswa->nama }}</td>
                        @if ($siswa->nilai->isNotEmpty())
                            <td>{{ $siswa->nilai->first()->bahasa_inggris }}</td>
                            <td>{{ $siswa->nilai->first()->matematika }}</td>
                            <td>{{ $siswa->nilai->first()->bahasa_indonesia }}</td>
                            <td>{{ $siswa->nilai->first()->kejuruan }}</td>
                            <td>{{ $siswa->nilai->first()->agama }}</td>
                            <td>{{ number_format($siswa->nilai->first()->rata_rata, 2) }}</td>
                            <td>
                                <a href="{{ route('admin.nilai.edit', $siswa->nilai->first()->id) }}"
                                    class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('admin.nilai.destroy', $siswa->nilai->first()->id) }}" method="POST"
                                    style="display:inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm"
                                        onclick="return confirm('Yakin ingin menghapus nilai ini?')">Hapus</button>
                                </form>
                            </td>
                        @else
                            <td colspan="6">Belum ada nilai</td>
                            <td>
                                <a href="{{ route('admin.nilai.create', $siswa->id) }}"
                                    class="btn btn-primary btn-sm">Tambah Nilai</a>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
