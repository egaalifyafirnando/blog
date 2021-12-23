@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-6 mt-3">
            <h1 class="h3 my-3 fw-normal text-center">Registration Form</h1>
            <main class="form-registration">
                {{-- <img class="mb-4" src="../assets/brand/bootstrap-logo.svg" alt="" width="72" height="57"> --}}
                <form action="/register" method="post">
                    @csrf
                    <div class="form-floating">
                        <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name"
                            placeholder="name" name="name" required value="{{ old('name') }}">
                        <label for="name">Name</label>
                        @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="text" class="form-control @error('username') is-invalid @enderror" id="username"
                            placeholder="username" name="username" required value="{{ old('username') }}">
                        <label for=" username">Username</label>
                        @error('username')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email-address"
                            placeholder="name@example.com" name="email" required value="{{ old('email') }}">
                        <label for=" email-address">Email address</label>
                        @error('email')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror"
                            id="password" placeholder="Password" name="password" required>
                        <label for="password">Password</label>
                        @error('password')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button class="w-100 btn btn-lg btn-danger mt-3" type="submit">Register</button>
                </form>
                <small class="d-block text-center mt-3">Already registered? <a class="text-danger"
                        href="/login">Login</a></small>
            </main>
        </div>
    </div>
@endsection
