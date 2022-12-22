@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-lg-5 ">
        <main class="form-registration">
            <form action="/register" method="POST">
                @csrf
                <h1 class="h3 mb-3 fw-normal text-center">Registration Form</h1>

                <div class="form-floating">
                    <input type="text" class="form-control rounded-top @error('name') is-invalid @enderror" id="name" placeholder="name" name="name">
                    <label for="name">name</label>
                    @error('name')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="text" class="form-control @error('username') is-invalid @enderror" id="username" placeholder="username" name="username">
                    <label for="username">username</label>
                    @error('username')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-floating"> 
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="name@example.com" name="email">
                    <label for="email">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder="Password" name="password">
                    <label for="password">Password</label>
                    @error('password')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                      </div>
                    @enderror
                </div>
    
                <button class="w-100 btn btn-lg btn-primary mt-4" type="submit">Sign in</button>
            </form>
            <small class="text-center">Not registered <a href="/register">register Now!</a></small>
        </main>
    </div>
</div>  
@endsection
