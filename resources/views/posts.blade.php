@extends('layouts.main')

@section('container')
    <h1 class="py-3 mb-3 text-center">{{ $title }}</h1>

    <div class="row justify-content-center mb-3">
        <div class="col-md-6">
            {{-- form search feature --}}
            <form action="/posts" method="GET">
                {{-- hidden input for url request --}}
                @if (request('category'))
                    <input type="hidden" name="category" value="{{ request('category') }}">
                @endif
                @if (request('author'))
                    <input type="hidden" name="author" value="{{ request('author') }}">
                @endif

                {{-- search --}}
                <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Search post..." name="search">
                    <div class="input-group-append">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    {{-- post hero --}}
    @if ($posts->count() > 0)
        <div class="card shadow mb-5">
            @if ($posts[0]->image)
                <div class="rounded-bottom" style="max-height:360px; overflow:hidden;">
                    <img src="{{ asset('storage/' . $posts[0]->image) }}" class="img-fluid rounded"
                        alt="{{ $posts[0]->category->name }}">
                </div>
            @else
                <img src="https://source.unsplash.com/1200x400/?{{ $posts[0]->category->name }}" class="card-img-top"
                    alt="{{ $posts[0]->category->name }}">
            @endif

            <div class="card-body text-center">
                <h3 class="card-title"><a class="text-decoration-none text-dark"
                        href="/posts/{{ $posts[0]->slug }}">{{ $posts[0]->title }}</a>
                </h3>
                <p>
                    <small class="text-muted">
                        By
                        <a class="text-decoration-none" href="/posts?author={{ $posts[0]->author->username }}">
                            {{ $posts[0]->author->name }}
                        </a>
                        in
                        <a class="text-decoration-none" href="/posts?category={{ $posts[0]->category->slug }}">
                            {{ $posts[0]->category->name }}
                        </a>,
                        {{ $posts[0]->created_at->diffForHumans() }}
                    </small>
                </p>
                <p class="card-text">{{ $posts[0]->excerpt }}</p>
                <a class="btn btn-primary" href="/posts/{{ $posts[0]->slug }}">Read more</a>
            </div>
        </div>



        {{-- post list --}}
        <div class="container">
            <div class="row justify-content-center">
                @foreach ($posts->skip(1) as $post)
                    <div class="col-md-4 mb-3">
                        <div class="card shadow" style="min-height: 500px;">
                            <div class="position-absolute px-3 py-2" style="background-color: rgba(0, 0, 0, 0.7);">
                                <a class="text-decoration-none text-white"
                                    href="/posts?category={{ $post->category->slug }}">{{ $post->category->name }}</a>
                            </div>
                            @if ($post->image)
                                <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded"
                                    alt="{{ $post->category->name }}">
                            @else
                                <img src="https://source.unsplash.com/600x400/?{{ $post->category->name }}"
                                    class="card-img-top" alt="{{ $post->category->name }}">
                            @endif
                            <div class="card-body">
                                <h3 class="card-title"><a class="text-decoration-none text-dark"
                                        href="/posts/{{ $post->slug }}">{{ $post->title }}</a>
                                </h3>
                                <p>
                                    <small class="text-muted">
                                        By
                                        <a class="text-decoration-none"
                                            href="/posts?author={{ $post->author->username }}">
                                            {{ $post->author->name }}
                                        </a>,
                                        {{ $post->created_at->diffForHumans() }}
                                    </small>
                                </p>
                                <p class="card-text">{{ $post->excerpt }}</p>
                                <a class="btn btn-primary" href="/posts/{{ $post->slug }}">
                                    Read more
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @else
        <p class="text-center display-3">No post found !!</p>
    @endif


    {{-- pagination --}}
    <div class="d-flex justify-content-center text-center">
        {{ $posts->links() }}
    </div>

@endsection
