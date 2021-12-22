@extends('layouts.main')

@section('container')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="pt-3">{{ $post->title }}</h2>
                <h6 class="text-muted mb-5">By <a class="text-decoration-none text-danger"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a class="text-decoration-none text-danger"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </h6>
                @if ($post->image)
                    <div class="rounded-bottom" style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid rounded">
                @endif
                <article class="my-5">
                    {!! $post->body !!}
                </article>
                <div class="btn btn-danger mt-3 rounded-pill">
                    <a class="text-decoration-none d-block text-white" href="/posts">Back to posts</a>
                </div>
            </div>
        </div>
    @endsection
