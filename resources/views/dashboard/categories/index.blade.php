@extends('dashboard.layouts.main')

@section('container')
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Post Categories</h1>
    </div>
    <div class="table-responsive">
        <a class="btn btn-primary mb-3" href="/dashboard/posts/create">Create new category</a>
        @if (session()->has('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif
        <table class="table table-striped table-sm">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Category Name</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $category->name }}</td>
                        <td>
                            <a class="badge bg-info mx-1" href="/dashboard/categories/{{ $category->slug }}"><span
                                    data-feather="eye"></span></a>
                            <a class="badge bg-warning mx-1" href="/dashboard/categories/{{ $category->slug }}/edit"><span
                                    data-feather="edit"></span></a>
                            <form class="d-inline" action="/dashboard/categories/{{ $category->slug }}"
                                method="post">
                                @csrf
                                @method('delete')
                                <button class="badge bg-danger  mx-1 border-0"
                                    onclick="return confirm('Are you sure?')"><span data-feather="trash-2"></span></button>
                            </form>
                    </tr>
                @endforeach

            </tbody>
        </table>
    </div>
@endsection
