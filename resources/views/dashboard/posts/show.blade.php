@extends('dashboard.layouts.main')

@section('container')
    <div class="container my-3">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="pt-3">{{ $post->title }}</h2>
                <a class="btn btn-danger my-4 rounded-pill" href="/dashboard/posts"><span data-feather="arrow-left"></span>
                    Back to all
                    my posts</a>
                <a class="btn btn-danger my-4 rounded-pill" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                        data-feather="edit"></span> Edit</a>
                <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger my-4 rounded-pill" onclick="return confirm('Are you sure?')"><span
                            data-feather="trash-2"></span> Delete</button>
                </form>
                @if ($post->image)
                    <div class="rounded-bottom" style="max-height:400px; overflow:hidden;">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded">
                    </div>
                @else
                    <img src="https://source.unsplash.com/1200x400/?{{ $post->category->name }}"
                        class="img-fluid rounded">
                @endif
                <article class="my-5">
                    {!! $post->body !!}
                </article>
            </div>
        </div>
    @endsection
