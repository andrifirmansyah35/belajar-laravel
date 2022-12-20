@extends('dashboard.layouts.main')

@section('container')
<div class="container">
    <div class="row my-4">
        <div class="col-lg-8">
                <h2> {{ $post->title }} </h2>

                <a href="/dashboard/posts" class="btn btn-success">Back All to My Post</a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-warning text-decoration-none">edit</a>
                <a href="/dashboard/posts/{{ $post->slug }}" class="btn btn-danger text-decoration-none">hapus</a>    
                
                <p>category : <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
        

                <img src="https://source.unsplash.com/500x400/?{{ $post->category->name }}" class="img-fluid mt-5"
                    alt="{{ $post->category->name }}">
                {{-- <h5>By: {{ $author }}</h5> --}}
            <article class="my-3 fs-5">
                {!! $post->body !!} 
            </article>
        
            <a href="/blog">back To Posts</a>
    </div>
</div>
@endsection
