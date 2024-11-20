<!-- resources/views/user/gallery/index.blade.php -->
@extends('user.layout')

@section('title', 'Gallery')

@section('content')
    <div class="container mt-4">
        <h1 class="text-center">Gallery</h1>
        <div class="row">
            @foreach ($homes as $home)
                <div class="col-md-4">
                    <div class="card mb-4 gallery-card">
                        <img src="{{ Storage::url('photos/' . $home->photo) }}" class="card-img-top img-fluid gallery-img"
                            alt="{{ $home->title }}">
                        <div class="card-body text-center">
                            <h5 class="card-title">{{ $home->title }}</h5>
                            <p class="card-text">{{ $home->description }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection

<style>
    /* Gallery styling */
    .gallery-card {
        border: none;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s, box-shadow 0.3s;
    }

    .gallery-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .gallery-img {
        width: 100%;
        height: 200px;
        object-fit: cover;
        /* Menyesuaikan gambar agar sesuai dengan lebar card tanpa mengubah proporsi */
    }

    .card-body {
        padding: 15px;
    }

    .card-title {
        font-size: 1.2em;
        font-weight: bold;
        color: #145D69;
    }

    .card-text {
        color: #555;
        font-size: 0.9em;
    }

    /* Responsiveness untuk tampilan mobile */
    @media (max-width: 576px) {
        .gallery-img {
            height: 150px;
        }
    }
</style>
