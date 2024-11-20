@extends('user.layout')

@section('title', 'Nilai Siswa')

@section('content')
    <div class="container mt-5">
        <h2>Nilai Siswa: {{ $siswa->nama }}</h2>

        @if ($siswa->nilai->isEmpty())
            <p>Belum ada nilai untuk siswa ini.</p>
        @else
            <table class="table table-bordered mt-3">
                <thead>
                    <tr>
                        <th>Bahasa Inggris</th>
                        <th>Matematika</th>
                        <th>Bahasa Indonesia</th>
                        <th>Kejuruan</th>
                        <th>Agama</th>
                        <th>Rata-rata</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($siswa->nilai as $nilai)
                        <tr>
                            <td>{{ $nilai->bahasa_inggris }}</td>
                            <td>{{ $nilai->matematika }}</td>
                            <td>{{ $nilai->bahasa_indonesia }}</td>
                            <td>{{ $nilai->kejuruan }}</td>
                            <td>{{ $nilai->agama }}</td>
                            <td>{{ number_format($nilai->rata_rata, 2) }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif

        {{-- <a href="{{ route('user.siswa.index') }}" class="btn btn-primary">Kembali</a> --}}
    </div>
@endsection
