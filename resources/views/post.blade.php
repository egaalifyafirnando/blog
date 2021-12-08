@extends('layouts.main')

@section('container')

    <div class="container mb-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="pt-3">{{ $post->title }}</h2>
                <h6 class="text-muted mb-5">By <a class="text-decoration-none"
                        href="/posts?author={{ $post->author->username }}">{{ $post->author->name }}</a>
                    in <a class="text-decoration-none"
                        href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                </h6>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" alt=""
                    class="img-fluid rounded">
                <article class="my-5">
                    {!! $post->body !!}
                </article>
                <a class="text-decoration-none d-block mt-3" href="/posts">back to posts</a>
            </div>
        </div>
    @endsection
