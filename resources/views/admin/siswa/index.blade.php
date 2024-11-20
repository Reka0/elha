@extends('layouts.admin')

@section('title', 'Siswa')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <a href="{{ route('admin.siswa.create') }}" class="btn btn-primary mb-3">Add Siswa</a>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>NISN</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($siswa as $s)
                                <tr>
                                    <td>{{ $s->id }}</td>
                                    <td>{{ $s->nisn }}</td>
                                    <td>{{ $s->nama }}</td>
                                    <td>{{ $s->tempat_lahir }}</td>
                                    <td>{{ $s->tanggal_lahir }}</td>
                                    <td>
                                        <a href="{{ route('admin.siswa.edit', $s->id) }}" class="btn btn-warning">Edit</a>
                                        <form action="{{ route('admin.siswa.destroy', $s->id) }}" method="POST"
                                            style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
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
@endsection
