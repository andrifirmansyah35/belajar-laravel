@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5 ">
        <main class="form-signin">
            <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>
            
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{ session('success') }}</strong> 
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                
                @if (session()->has('loginError'))
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <strong>{{ session('loginError') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
                @endif
                
                <form action="/login" method="post">
                    @csrf
                <div class="form-floating">
                    <input type="email" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com" name="email" autofocus required>
                    <label for="floatingInput">Email address</label>
                    @error('email')
                    <div class="invalid-feedback mb-2">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password" name="password" required>
                    <label for="floatingPassword">Password</label>
                </div>
    
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="text-center">Not registered <a href="/register">register Now!</a></small>
        </main>
    </div>
</div>  
@endsection
