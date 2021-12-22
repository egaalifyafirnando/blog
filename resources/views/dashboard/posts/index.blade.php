@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">My Posts</h1>
    </div>
    <div class="table-responsive">
        <a class="btn btn-danger mb-3 rounded-pill" href="/dashboard/posts/create">Create new post</a>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Title</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->category->name }}</td>
                        <td>
                            <a class="badge bg-danger" href="/dashboard/posts/{{ $post->slug }}"><span
                                    data-feather="eye"></span></a>
                            <a class="badge bg-danger" href="/dashboard/posts/{{ $post->slug }}/edit"><span
                                    data-feather="edit"></span></a>
                            <form class="d-inline" action="/dashboard/posts/{{ $post->slug }}" method="post">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger border-0" onclick="return confirm('Are you sure?')"><span
                                        data-feather="trash-2"></span></button>
                            </form>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
