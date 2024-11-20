@extends('layouts.admin')

@section('content')
    <div class="container">
        <h1>Home Sections</h1>
        <a href="{{ route('admin.home.create') }}" class="btn btn-primary mb-3">Add Home</a>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($homes as $home)
                    <tr>
                        <td>{{ $home->title }}</td>
                        <td>{{ $home->description }}</td>
                        <td>
                            <img src="{{ Storage::url('photos/' . $home->photo) }}" alt="{{ $home->title }}"
                                style="max-width: 100px;">
                        </td>
                        <td>
                            <a href="{{ route('admin.home.edit', $home->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('admin.home.destroy', $home->id) }}" method="POST"
                                style="display:inline;">
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
@endsection
