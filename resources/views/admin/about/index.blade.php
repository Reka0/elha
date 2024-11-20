@extends('layouts.admin')

@section('title', 'Daftar About')

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Daftar About</h4>
                        <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Tambah About</a>
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
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Photo</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($abouts as $about)
                                    <tr>
                                        <td>{{ $about->id }}</td>
                                        <td>{{ $about->title }}</td>
                                        <td>{{ $about->description }}</td>
                                        <td>
                                            @if ($about->photo)
                                                <img src="{{ Storage::url('public/photos/' . $about->photo) }}"
                                                    alt="Photo" width="100">
                                            @endif
                                        </td>
                                        <td>
                                            <a href="{{ route('admin.about.edit', $about->id) }}"
                                                class="btn btn-warning">Edit</a>
                                            <form action="{{ route('admin.about.destroy', $about->id) }}" method="POST"
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
