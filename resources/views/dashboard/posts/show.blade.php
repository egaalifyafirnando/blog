@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="pt-3">{{ $post->title }}</h2>
                <a class="btn btn-success my-4" href="/dashboard/posts"><span data-feather="arrow-left"></span> Back to all
                    my posts</a>
                <a class="btn btn-warning my-4" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                        data-feather="edit"></span> Edit</a>
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger my-4" onclick="return confirm('Are you sure?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>

                <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}" class="img-fluid rounded">
                <article class="my-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    @endsection
