@extends('user.layout')

@section('title', 'About Us')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="my-4">About Us</h1>
                @foreach ($abouts as $about)
                    <div class="card mb-3 post">
                        <div class="row no-gutters">
                            <div class="col-md-4">
                                @if ($about->photo)
                                    <img src="{{ Storage::url('public/photos/' . $about->photo) }}" class="card-img"
                                        alt="About Photo">
                                @else
                                    <img src="https://via.placeholder.com/150" class="card-img" alt="Default Photo">
                                @endif
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $about->title }}</h5>
                                    <p class="card-text">{{ $about->description }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
