@extends('layouts.main')

@section('container')
    <h1>Categories</h1>
    <div class="container">
        <div class="row justify-content-center">
            @foreach ($categories as $category)
                <div class="col-md-4">
                    <a href="/posts?category={{ $category->slug }}">
                        <div class="card shadow my-3 p-2 text-white">
                            @if ($category->image)
                                <div style="height:260px; overflow:hidden;">
                                    <img src="{{ asset('storage/' . $category->image) }}" class="img-fluid rounded"
                                        alt="{{ $category->name }}" style="height: 100%; width: 100%">
                                </div>
                            @else
                                <div>
                                    <img src="https://source.unsplash.com/600x400/?{{ $category->name }}"
                                        class="card-img-top" alt="{{ $category->name }}">
                                </div>
                            @endif
                            <div class="card-img-overlay d-flex align-items-center p-2">
                                <h5 class="card-title text-center flex-fill p-3"
                                    style="background-color: rgba(0, 0, 0, 0.7)">
                                    {{ $category->name }}</h5>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
