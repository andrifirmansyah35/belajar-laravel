@extends('layouts.main')

@section('container')

<div class="row justify-content-center">
    <div class="col-md-5 ">
        <main class="form-signin">
            <form>
                <h1 class="h3 mb-3 fw-normal text-center">Please Login</h1>

                @if (session()->has('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{ session('success') }}</strong> 
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                @endif

                <div class="form-floating">
                    <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                    <label for="floatingInput">Email address</label>
                </div>
                <div class="form-floating">
                    <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                    <label for="floatingPassword">Password</label>
                </div>
    
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
            <small class="text-center">Not registered <a href="/register">register Now!</a></small>
        </main>
    </div>
</div>  
@endsection
