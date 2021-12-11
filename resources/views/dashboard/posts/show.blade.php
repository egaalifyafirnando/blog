@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="pt-3">{{ $post->title }}</h2>
                <a class="btn btn-success my-4" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to all
                    my posts</a>
                <a class="btn btn-warning my-4" href=""><span data-feather="edit"></span> Edit</a>
                <a class="btn btn-danger my-4" href=""><span data-feather="trash-2"></span> Delete</a>
                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid rounded">
                <article class="my-5">
                    {!! $post->body !!}
                </article>
                <a class="text-decoration-none d-block mt-3" href="/posts">back to posts</a>
            </div>
        </div>
    @endsection
